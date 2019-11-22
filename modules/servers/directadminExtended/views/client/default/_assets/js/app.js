var module = function ()
{
    var xhr = false;
    function sidebarToggle() {

        var moduleBody = jQuery('.module-container');
        jQuery(document).on("click touchstart", ".cp-sidebar-toggle", function (e) {
            e.preventDefault();
            var closed = 0;
            if (moduleBody.hasClass('sidebar-closed')) {
                moduleBody.removeClass('sidebar-closed');
            } else if (!moduleBody.hasClass('sidebar-closed')) {
                moduleBody.addClass('sidebar-closed');
                closed = 1;
            }

            if (xhr !== false)
                xhr.abort();

            xhr = jQuery.ajax({
                type: "POST",
                url: location.href,
                data: {sidebar_cloased: closed}
            });
        });
    }

    function sidebarHeight() {
        var height = jQuery('.module-sidebar').height();
        jQuery('#mg-wrapper').css('min-height', height);
    }

    return {
        init: function () {
            sidebarToggle();
            sidebarHeight();
        }
    };
}();

jQuery(function () {
    module.init();
    jQuery('[title]').bstooltip();
});

function getInfoHTML(info) {
    return '<div class="alert alert-success" role="alert">'
            + '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>'
            + '<p>' + info + '</p>'
            + '</div>';
}

function getErrorHTML(error) {
    return '<div class="alert alert-danger" role="alert">'
            + '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>'
            + '<p>' + error + '</p>'
            + '</div>';
}

function generateRandomPassword() {
    var length = 12,
            charset = "abcdefghijklnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()",
            retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}

function calculatePWStrength($input) {
    var result = zxcvbn($input.val());
    var score = parseInt(result.score);
    var score_to_lang = ['very_weak', 'weak', 'adequate', 'pretty_good', 'excellent'];
    var score_to_color = ['#c9302c', '#d9534f', '#ec971f', '#5cb85c', '#449d44'];
    if ($input.parents('.modal').length) {
        $input.parents('.modal').first().find('#pwstrengthbox').html(validator_lang[score_to_lang[score]]).css('background-color', score_to_color[score]);
    } else {
        $input.parents('form').first().find('#pwstrengthbox').html(validator_lang[score_to_lang[score]]).css('background-color', score_to_color[score]);
    }
}

function htmlspecialchars_decode_js(text) {
    return text
            .replace(/&amp;/g, "&")
            .replace(/&lt;/g, "<")
            .replace(/&gt;/g, ">")
            .replace(/&quot;/g, '"')
            .replace(/&#039;/g, "'");
}

//==============================================================================

var is_ajax_action = false;

jQuery.extend({
    getUrlVars: function () {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    },
    getUrlVar: function (name) {
        return jQuery.getUrlVars()[name];
    }
});

jQuery(document).ready(function () {
    jQuery(document).delegate("[data-toggle='modal']", 'click', function () {
        var $this = jQuery(this);
        var insert = $this.data('modal-insert');
        var target = $this.data('target');
        if (typeof insert != "undefined" && typeof target != "undefined") {
            jQuery.each(insert.split('|'), function (index, value) {
                var tab = value.split(':');
                var elements = jQuery(tab[0], jQuery(target));
                if (elements.length) {
                    elements.each(function () {
                        var el = jQuery(this);
                        if (typeof el[0].value != "undefined") {
                            el.val(htmlspecialchars_decode_js(decodeURIComponent(tab[1])));
                        } else {
                            el.html(decodeURIComponent(tab[1]));
                        }
                    })
                }
            });
        }
    });
    //if (jQuery.isFunction('selectBoxIt')) { jQuery("#mg-wrapper select").selectBoxIt('destroy'); }
    jQuery(document).delegate('#mg-wrapper [type="password"]:not([data-match])', 'keyup change', function () {
        calculatePWStrength(jQuery(this));
    });

    jQuery(document).on('keydown', function (event) {
        var x = event.which;
        if (x === 13 && event.target.type !== 'textarea') {
            if (jQuery('#mg-wrapper .modal:visible').length) {
                jQuery('#mg-wrapper .modal:visible').first().find('[data-act]').last().trigger('click');
            }
        }
    });

    jQuery('#mg-wrapper').delegate('input', 'keydown', function (event) {
        var x = event.which;
        if (x === 13 && event.target.type !== 'textarea') {
            if (jQuery(this).parents('.modal').length) {
                jQuery(this).parents('.modal').first().find('[data-act]').last().trigger('click');
            } else {
                jQuery(this).parents('form').first().find('[data-act]').last().trigger('click');
            }
            event.preventDefault();
            return false;
        }
    });

    if (typeof dataTable == 'function')
        jQuery("#mg-wrapper .datatable").dataTable();

    jQuery(document).delegate("#mg-wrapper [data-change]:not(.disabled)", 'change', function (e) {
        //if(is_ajax_action) return;
        is_ajax_action = true;
        var act_obj = jQuery(this);
        act_obj.data('act', act_obj.data('change'))
        doAction(act_obj);
    });
    
    
    jQuery(document).delegate("#mg-wrapper [data-act]:not(.disabled)", 'click', function (e) {
        //if(is_ajax_action) return;
        is_ajax_action = true;
        var act_obj = jQuery(this);
        doAction(act_obj);
    });

    jQuery(document).delegate("[data-search]", 'keyup', function () {
        var value = jQuery(this).val();
        var table = jQuery(this).data('search');
        var empty = true;

        if (value.length) {
            if (typeof jQuery('#' + table + ' th').attr('style') == 'undefined') {
                jQuery('#' + table + ' th:not(:last-child)').each(function () {
                    jQuery(this).width(jQuery(this).width()-20);
                });
            }
        } else {
            jQuery('#' + table + ' th:not(:last-child)').each(function () {
                jQuery(this).width('auto').removeAttr('style');
            });
        }

        jQuery("#" + table + ' tbody tr:not(.search-empty)').each(function () {
            if (jQuery(':contains("' + value + '")', this).length) {
                jQuery(this).show().css('display', "");
                empty = false;
            } else {
                jQuery(this).hide();
            }
        });

        if (empty) {
            if (!jQuery("#" + table + ' tbody tr.search-empty').length)
                jQuery("#" + table + ' tbody').append('<tr class="search-empty"><td colspan="' + countTableCollumns(table) + '" class="text-center">' + lang['search_results_empty_js'] + '</td></tr>');
        } else {
            jQuery("#" + table + ' tbody tr.search-empty').remove();
        }

    });

    jQuery(document).delegate("[data-genpwd]", 'click', function () {
        var inputs = jQuery(this).data('genpwd').split(",");
        var pwd = generateRandomPassword();
        jQuery('#' + inputs[0]).val(pwd).attr('type', 'text').trigger('change');
        jQuery('#' + inputs[1]).val(pwd).trigger('change');
        calculatePWStrength(jQuery('#' + inputs[0]));
        jQuery('#' + inputs[0]).on('input', function () {
            $this = jQuery(this);
            var position = $this.prop("selectionStart");
            jQuery(this).attr('type', 'password');
            $this.get(0).setSelectionRange(position, position);
        });

    });

    jQuery(document).delegate(':input[data-copy-to]', 'change keyup', function () {
        var value = jQuery(this).val();
        jQuery('#' + jQuery(this).data('copy-to')).val(value);
    });
});

function setContainer(html) {
    if(jQuery('.modal:visible').length) {
        jQuery('body').removeClass('modal-open').css('padding-right','');
        jQuery('.modal:visible').hide();
        jQuery('.modal-backdrop').remove();
    }
    jQuery("#mg-container").html(html);
}

function getAlertTextLength($element) {
    var len = 0;
    jQuery('p', $element).each(function () {
        len += jQuery(this).html().length;
    });
    return len;
}

function setAlerts(error, info) {
    var element = jQuery(error + info);

    jQuery("#mg-error-container").html(element);
    if (error.length + info.length > 0)
        jQuery('html,body').animate({scrollTop: jQuery("#mg-error-container").offset().top - 20});
    setTimeout(function () {
        jQuery(element).fadeOut('slow', function () {
            element.remove();
        });
    }, 5000 + (getAlertTextLength(element)) * 50);
}

function setModalError(error, modalobj) {
    var element = jQuery(error);
    jQuery("div.modal-body", modalobj).prepend(element);
    setTimeout(function () {
        jQuery(element).fadeOut('slow', function () {
            element.remove();
        });
    }, 10000 + (getAlertTextLength(element)) * 50);
}

function appendLoader(obj) {
    obj.addClass('disabled');
    var no_span = obj.data("no-span");
    var noloader = obj.data("noloader");
    if (typeof noloader == 'undefined') {
        if (typeof no_span == 'undefined') {
            obj.html('<span>' + obj.html() + '</span>');
        }
        obj.append(' <i class="fa fa-spinner fa-pulse"></i>');
    }
}

function removeLoader(obj) {
    jQuery('.fa-spinner', obj).remove();
    var no_span = obj.data("no-span");
    if (typeof no_span == 'undefined') {
        obj.html(obj.children('span').first().html());
    }
    obj.removeClass('disabled');
}

function setAndOpenModal(html) {
    jQuery('.modal-backdrop').remove();
    jQuery("#mg-modal").html(html);
    jQuery("#mg-modal > .modal").modal();
}

function closeModal(modalobj) {
    modalobj.modal('hide');
    modalobj.parent().modal('hide');
}

function doAction(obj) {

    var act = obj.data("act");

    var pathArray = queryToArray(location.search.substring(1));
    pathArray['act'] = act;

    var noloader = obj.data("noloader");
    if (typeof noloader == 'undefined') {
        appendLoader(obj);
    }

    var refresh = obj.data("refresh");
    if (typeof refresh != 'undefined') {
        pathArray['_refresh'] = 1;
    }

    var rawData = '';

    var modal = false;
    var modalobj = false;

    var formid = obj.data("formid");
    var with_modal = obj.data("with-modal");
    var no_validate = (typeof obj.data('no-validate') == 'undefined') ? false : true;

    if (obj.parents(".modal").length > 0) {
        modal = true;

        modalobj = obj.parents(".modal").first();


//alert(pathArray.toSource());
        if (typeof formid == 'undefined' || typeof with_modal != "undefined") {
            if (typeof obj.data("raw") != "undefined") {
                rawData = jQuery(':input', modalobj).serialize();
            } else {
                pathArray = jQuery.extend({}, pathArray, queryToArray(jQuery(':input', modalobj).serialize()));
            }

            if (!no_validate) {
                modalobj.validator('validate');
                if (jQuery('.has-error', modalobj).length) {
                    removeLoader(obj);
                    return 0;
                }
            }
        }
        // modalobj = modalobj.parent()
    }
    
//    alert(jQuery('#' + formid + ' :input').serialize());
//    alert(pathArray.toSource());
//alert(pathArray.toSource());
    if (typeof formid != 'undefined') {
        if (typeof obj.data("raw") != "undefined") {
            if (rawData.length == 0)
                rawData = jQuery('#' + formid + ' :input').serialize();
            else
                rawData += '&' + jQuery('#' + formid + ' :input').serialize();
        } else {
            var pathArray = jQuery.extend({}, pathArray, queryToArray(jQuery('#' + formid + ' :input').serialize()));
        }

        if (!no_validate) {
            $form = jQuery('#' + formid);
            $form.validator('validate');
            if (jQuery('.has-error', $form).length) {
                removeLoader(obj);
                return 0;
            }
        }
    }
//alert(pathArray.toSource());
    var additional_query = obj.data("query");
    if (typeof additional_query != 'undefined' && additional_query.length > 0) {
        var pathArray = jQuery.extend({}, pathArray, queryToArray(additional_query));
    }
    
    var rtable = obj.data('rtable');

    var subpage = obj.data('subpage');
    var page = obj.data('page');

    var do_not_close_the_modal = obj.data('dont-close-modal');

    if (typeof subpage != 'undefined' || typeof page != 'undefined') {
        (typeof page == 'undefined') ? 0 : pathArray['page'] = page;
        (typeof subpage == 'undefined') ? 0 : pathArray['subpage'] = subpage;
        location.search = arrayToQuery(pathArray);
    } else {
        pathArray['ajax'] = 1;
        jQuery.ajax({
            type: "POST",
            url: location.pathname + '?ajax=1',
            data: arrayToQuery(pathArray) + '&' + rawData,
            //async: false
        })
                .done(function (ret) {
                    try {
                        var obj = jQuery.parseJSON(ret);

                        if (obj.result == 1) {

                            if (typeof obj.action.refreshhtml != 'undefined') {
//                                if (modal) {
//                                    //closeModal(modalobj);
//                                    modalobj.hide();
//                                    jQuery('.modal-backdrop').remove();
//                                    modal = false;
//                                }
                                modal = false;
                                setContainer(obj.action.refreshhtml);
                                if (typeof dataTable == 'function')
                                    jQuery("#mg-wrapper .datatable").dataTable();
                            }

                            if (typeof obj.action.output.modalhtml != 'undefined') {
                                if (modal) {
                                    modalobj.hide();
                                    jQuery('.modal-backdrop').remove();
                                }

                                //jQuery('[title]').bstooltip('hide');
                                setAndOpenModal(obj.action.output.modalhtml);
                            }

                            if (typeof obj.action.output.open_window != 'undefined') {
                                openNewWindow(obj.action.output.open_window);
                            }

                            if (typeof obj.action.output.go_to != 'undefined') {
                                goToPage(obj.action.output.go_to);
                            }

                            if (modal) {
                                if (obj.action.error.length) {
                                    setModalError(obj.action.error, modalobj);
                                } else {
                                    if (typeof do_not_close_the_modal == 'undefined') {
                                        closeModal(modalobj);
                                        setAlerts(obj.action.error, obj.action.info);
                                    }
                                }
                            } else {
                                setAlerts(obj.action.error, obj.action.info);
                            }

                            if (typeof obj.action.output.callback != 'undefined') {
                                if (typeof (window[obj.action.output.callback]) == "function") {
                                    window[obj.action.output.callback](obj.action.output);
                                }
                            }

                            if (typeof rtable != 'undefined' && !obj.action.error.length) {
                                refreshTable(rtable);
                            }

                        } else {
                            alert(obj.errormsg);
                        }
                    } catch (err) {
                        var index = err.toString().indexOf('<!DOCTYPE html>');
                        
                        if(index === -1) {
                            location.href = location.href;
                        } else {
                            if (modal) {
                                setModalError(getErrorHTML(lang['json_parse_error']), modalobj);
                            } else {
                                setAlerts(getErrorHTML(lang['json_parse_error']), '');
                            }
                            console.log('ERROR: ' + err);
                            console.log(ret);
                        }
                    }
                })
                .always(function () {
                    removeLoader(obj);
                    is_ajax_action = false;
                    jQuery('[title]').bstooltip('hide').bstooltip();
                });
    }
}

function countTableCollumns(table) {
    var colCount = 0;
    jQuery('#' + table + ' tr:nth-child(1) th').each(function () {
        if (jQuery(this).attr('colspan')) {
            colCount += +jQuery(this).attr('colspan');
        } else {
            colCount++;
        }
    });
    return colCount;
}

function refreshTable(table) {
    var colCount = countTableCollumns(table);

    jQuery('#' + table + ' tbody').html('<td colspan="' + colCount + '" class="text-center"><i class="fa fa-spinner fa-pulse"></i></td>');

    var pathArray = queryToArray(location.search.substring(1));
    pathArray['act'] = 'refreshTable';
    pathArray['table'] = table;
    pathArray['ajax'] = 1;
    jQuery.ajax({
        type: "POST",
        url: location.pathname + '?ajax=1',
        data: arrayToQuery(pathArray),
        //async: false
    })
            .done(function (ret) {
                var obj = jQuery.parseJSON(ret);

                if (obj.result == 1) {
                    if (typeof obj.action.output.table != 'undefined') {
                        jQuery('#' + table + ' tbody').replaceWith(obj.action.output.table);
//                jQuery('#' + table + ' th:not(:last-child)').each( function() {
//                    jQuery(this).width(jQuery(this).width());
//                });
                        jQuery('[title]').bstooltip();
                    }
                }
            });
}

function goToPage(search) {
    location.search = search;
}

function openNewWindow(url) {
    var newwindow = window.open(url, 'vm', 'height=500,width=800');
    if (window.focus) {
        newwindow.focus()
    }
}


function queryToArray(query) {
    var queryParameters = {}, queryString = query, re = /([^&=]+)=([^&]*)/g, m;

    while (m = re.exec(queryString)) {
        if (typeof m[2] == 'string') {
            m[2] = m[2].replace(/\+/g, " ").replace(/%2b/g, '+');
        }
        queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
    }
    return queryParameters;
}

function arrayToQuery(array) {
    return jQuery.param(array);
}
