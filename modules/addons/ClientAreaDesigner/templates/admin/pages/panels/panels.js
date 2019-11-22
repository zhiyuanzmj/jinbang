jQuery(document).ready(function () {
    $('.sortable').sortable();

    //Save order
    $('#mg-button-save').on('click', function (e) {
        e.preventDefault();
        var sideBars = {primaryNavbar: [], secondaryNavbar: [], primarySidebar: [], secondarySidebar: [], homeWidget: []};
        $("#mg-PrimaryNavbar .mg-drag-widget").each(function (index) {
            var id = $(this).attr('data-id');
            var children = [];
            $(this).find('.list-group-item').each(function (index2) {
                children.push({"id": $(this).attr('data-id'), "order": index2});
            });
            sideBars.primaryNavbar.push({"id": id, "order": index, "children": children});
        });

        $("#mg-SecondaryNavbar .mg-drag-widget").each(function (index) {
            var id = $(this).attr('data-id');
            var children = [];
            $(this).find('.list-group-item').each(function (index2) {
                children.push({"id": $(this).attr('data-id'), "order": index2});
            });
            sideBars.secondaryNavbar.push({"id": id, "order": index, "children": children});
        });

        $("#mg-PrimarySidebar .mg-drag-widget").each(function (index) {
            var id = $(this).attr('data-id');
            var children = [];
            $(this).find('.list-group-item').each(function (index2) {
                children.push({"id": $(this).attr('data-id'), "order": index2});
            });
            sideBars.primarySidebar.push({"id": id, "order": index, "children": children});
        });

        $("#mg-SecondarySidebar .mg-drag-widget").each(function (index) {
            var id = $(this).attr('data-id');
            var children = [];
            $(this).find('.list-group-item').each(function (index2) {
                children.push({"id": $(this).attr('data-id'), "order": index2});
            });
            sideBars.secondarySidebar.push({"id": id, "order": index, "children": children});
        });

        $("#mg-HomeWidget .mg-drag-widget").each(function (index) {
            var id = $(this).attr('data-id');
            var children = [];
            $(this).find('.list-group-item').each(function (index2) {
                children.push({"id": $(this).attr('data-id'), "order": index2});
            });
            sideBars.homeWidget.push({"id": id, "order": index, "children": children});
        });

        JSONParser.request(
                'saveOrder'
                , sideBars
                , function (data) {

                });

    });

    //Add show modal
    $("#mg-panels-content").on('click', ".mg-run-modal-add", function (e) {
        $("#mg-modal-panel-add .nav-tabs a:first").tab("show");
        $("#mg-modal-panel-add").MGresetInputData();
        $("#mg-panel-contentModule").val("0");
        //parent
        if($(this).attr('data-id')==undefined && $(this).attr("data-class") != "PrimaryNavbar" && $(this).attr("data-class") != "SecondaryNavbar"){
            $(".mg-group-uri").hide();
        }else{
            $(".mg-group-uri").show();
        }
        if($(this).attr("data-class") == "HomeWidget"){
            if($(this).attr('data-id')==undefined)//parent
                $(".mg-extras").show();
            else
                $(".mg-extras").hide();
            $(".mg-display-rules").hide();            
        }else{
            $(".mg-extras").hide();
            $(".mg-display-rules").show();
            
        }
        
        var isNavbar  = $(this).attr("data-class") == "PrimaryNavbar" || $(this).attr("data-class") == "SecondaryNavbar";
        var isChild   = $(this).attr('data-id')!=undefined;
        
        //mg-content
        if(isNavbar ||  isChild){
            $(".mg-content").hide();
        }else{
            $(".mg-content").show();
        }
        
        
        $("#mg-panel-display").prop("checked", true);
        $("#mg-panel-class").val($(this).attr('data-class'));
        $("#mg-panel-parent").val($(this).attr('data-id'));
        if($(this).attr('data-id')){
            JSONParser.request(
                'itemDetail',
                {id: $(this).attr('data-id'),
                class: $(this).attr("data-class")},
                function(data){
                    if(data.domainIds)
                        $("#mg-panel-domains").val(data.domainIds).trigger('change');
                    if(data.productIds)
                        $("#mg-panel-products").val(data.productIds).trigger('change');
                    if(data.locationIds){
                        $("#mg-panel-locations").val(data.locationIds).trigger('change');
                    }
                    $("#mg-modal-panel-add").modal();
                });
        }else{
            $("#mg-modal-panel-add").modal();
        }
    });

    //Add submit
    $('#mg-modal-home-panel-form-add').on('submit', function (e) {
        e.preventDefault();
        JSONParser.request(
                'itemSave'
                , $(this).serialize()
                , function (data) {
                    if (data.modalError)
                        $('.modal.in .modal-alerts').alerts('error', data.modalError);
                    if (data.modalSuccess)
                        $('.modal.in .modal-alerts').alerts('success', data.modalSuccess);
                    if (data.widget) {
                        if ($('#mg-' + $("#mg-panel-class").val()).find('*[data-id="' + data.id + '"]').size()) {
                            $('#mg-' + $("#mg-panel-class").val()).find('*[data-id="' + data.id + '"]').replaceWith(data.widget)
                            $('#mg-' + $("#mg-panel-class").val()).find('*[data-id="' + data.id + '"]').find('.mg-panel-body-link').click();
                        } else
                            $("#mg-" + $("#mg-panel-class").val()).append(data.widget);
                        $('.sortable').sortable();
                        $('.modal.in ').modal('hide');
                    }
                });
    });

    //Delete confrim
    $("#mg-panels-content").on('click', ".mg-panel-delete", function (e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var label = $(this).attr('data-label');

        $("#mg-modal-panel-delete-class").val($(this).attr('data-class'));
        $("#mg-modal-panel-delete .modal-title strong").text(label);
        $("#mg-modal-panel-delete-id").val(id);
        $("#mg-modal-panel-delete").modal();

    });

    //Delete
    $("#mg-panels-content").on('submit', "#mg-panel-form-delete", function (e) {
        e.preventDefault();
        JSONParser.request(
                'itemDelete'
                , $(this).serialize()
                , function (data) {
                    if (data.modalError)
                        $('.modal.in .modal-alerts').alerts('error', data.modalError);
                    if (data.modalSuccess)
                        $('.modal.in .modal-alerts').alerts('success', data.modalSuccess);
                    var id = $("#mg-modal-panel-delete-id").val();

                    $('#mg-' + $("#mg-modal-panel-delete-class").val()).find('*[data-id="' + id + '"]').remove();
                    $('.modal.in ').modal('hide');
                })
    });

    //Edit load form
    $("#mg-panels-content").on('click', ".mg-panel-edit", function (e) {
        e.preventDefault();
        $("#mg-modal-panel-form-edit").MGresetInputData();

        $("#mg-panel-class-edit").val($(this).attr('data-class'));
        var dataClass = $(this).attr('data-class');
        JSONParser.request(
                'itemDetail'
                , {id: $(this).attr('data-id'),
                    class: $(this).attr('data-class')}
        , function (data) {
            $("#mg-panel-name-edit").attr("readonly", data.delete == '0');
            if(data.delete == '0')
                $("#mg-tab-content-edit .note-warning").removeClass('hidden');
            else
                $("#mg-tab-content-edit .note-warning").addClass('hidden');

            $("#mg-panel-id-edit").val(data.id);
            $("#mg-modal-home-panel-edit .modal-title strong").text(data.label ? data.label : data.name);
            $("#mg-panel-name-edit").val(data.name);
            $("#mg-panel-label-edit").val(data.label);
            $("#mg-panel-uri-edit").val(data.uri);
            $("#mg-panel-icon-edit").val(data.icon).trigger('change');
            $("#mg-panel-display-edit").prop("checked", data.display == '1');
            $("#mg-panel-body-html-edit").val(data.bodyHtml);
            $("#mg-panel-contentModule-edit").val(data.contentModule);
            $(".mg-content-html").html(data.contentHtml);
            $("#mg-panel-footer-html-edit").val(data.footerHtml);
            $("#mg-modal-home-panel-edit").modal();


            var isNavbar  = $("#mg-panel-class-edit").val() == "PrimaryNavbar" || $("#mg-panel-class-edit").val() == "SecondaryNavbar";
            var isChild   = data.parentId!="0";
        
            //mg-content
            if(isNavbar || isChild){
                $(".mg-content").hide();
            }else{
                $(".mg-content").show();
            }
        
            //parent
            if(data.parentId=="0" && $("#mg-panel-class-edit").val() != "PrimaryNavbar" && $("#mg-panel-class-edit").val() !="SecondaryNavbar"){
                $(".mg-group-uri").hide();
            }else{
                $(".mg-group-uri").show();
            }
            
            if($("#mg-panel-class-edit").val() == "HomeWidget"){
                if(data.parentId=="0")//parent
                    $(".mg-extras").show();
                else
                    $(".mg-extras").hide();
                $(".mg-display-rules").hide();

            }else{
                $(".mg-extras").hide();
                $(".mg-display-rules, .mg-not-home-widgets").show();
            }
            
            if(typeof data.extras != "undefined"){
                if (data.extras.color )
                    $("#mg-extras-color-edit").val(data.extras.color).trigger('change');
                if (data.extras.btn_icon)
                    $("#mg-extras-btn-icon-edit").val(data.extras.btn_icon);
                if (data.extras.btn_icon)
                    $("#mg-extras-btn-icon-edit").val(data.extras.btn_icon).trigger('change');
                if (data.extras.btn_link)
                    $("#mg-extras-btn-link-edit").val(data.extras.btn_link);
                if (data.extras.btn_text)
                    $("#mg-extras-btn-text-edit").val(data.extras.btn_text);
                
            }
            
            if(data.domainIds)
                $("#mg-panel-domains-edit").val(data.domainIds).trigger('change');
            if(data.productIds)
                $("#mg-panel-products-edit").val(data.productIds).trigger('change');
            if(data.locationIds){
                $("#mg-panel-locations-edit").val(data.locationIds).trigger('change');
            }
            //Conditions
            $("#mg-panel-revenueMin-edit").val(data.revenueMin).trigger('change');
            $("#mg-panel-revenueMax-edit").val(data.revenueMax).trigger('change');
            var map = ['domainActive','productActive','addonActive','domainInactive', 'productInactive','addonInactive'];
            for(var i = 0; i < map.length; i++){
                $("#mg-panel-"+map[i]+"-edit").val(data[map[i]]).trigger('change');
            }
            $("#mg-panel-body-html-edit").prop("disabled",data.hasChildren);
            $("#mg-panel-footer-html-edit").prop("disabled",data.hasChildren);

            data.hasChildren ?  $("#mg-tab-content-child-note").removeClass('hidden') : $("#mg-tab-content-child-note").addClass('hidden');

            if( $("#mg-panel-contentModule-edit").val()=="0" || $("#mg-panel-contentModule-edit").val()== null){
                $("#mg-panel-contentModule-edit").closest('.modal-body').find(".mg-content-html").next().show();
            }else{
                $("#mg-panel-contentModule-edit").closest('.modal-body').find(".mg-content-html").next().hide();
            }
        });

    });

    //Edit save form
    $('#mg-modal-panel-form-edit').on('submit', function (e) {
        e.preventDefault();
        JSONParser.request(
                'itemSave'
                , $(this).serialize()
                , function (data) {
                    if (data.modalError)
                        $('.modal.in .modal-alerts').alerts('error', data.modalError);
                    if (data.modalSuccess)
                        $('.modal.in .modal-alerts').alerts('success', data.modalSuccess);

                    if (data.widget) {
                        $('#mg-' + $("#mg-panel-class-edit").val()).find('*[data-id="' + data.id + '"]').replaceWith(data.widget);
                        $('#mg-' + $("#mg-panel-class-edit").val()).find('*[data-id="' + data.id + '"]').find('.mg-panel-body-link').click();
                        $('.modal.in ').modal('hide');
                        $('.sortable').sortable();
                    }

                });
    });

    //Panel body show / hide
    $("#mg-panels-content").on('click', ".mg-panel-body-link", function (e) {
        e.preventDefault();
        $(this).closest('.panel-default').find('.panel-body').toggle();
        if ($(this).find('i').hasClass('glyphicon-plus'))
            $(this).find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
        else
            $(this).find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');

    });

    //icons
    function mgformatIcon(option) {
        if (!option.id) {
            return option.text;
            W
        }

        var $option = $(
                '<span><i class="fa ' + option.element.value.toLowerCase() + '"></i> ' + option.text + '</span>'
                );
        return $option;
    }
    ;

    $(".mg-icon-select").select2({
        templateResult: mgformatIcon
    });
    $("#mg-extras-color").select2();
    $("#mg-extras-color-edit").select2();
    $(".mg-select2").select2();
    //tabs
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
       e.target // newly activated tab
       e.relatedTarget // previous active tab

       var form = $(this).closest('form');
       if(!form)
           e.preventDefault();
       if($(form)[0].checkValidity()==false){
           form.find("button[type=submit]").click();
           return false;
       }
    });
    
    
    $(".modal.in .nav-tabs a:first").tab("show");
    //Content Type
    $(".mg-wrapper").delegate(".mg-panel-contentModule","change",function(e){
        e.preventDefault();
        if($(this).closest('.modal-body').find("#mg-panel-class-edit").size() ){
            var className = $("#mg-panel-class-edit").val();
            var id =  $("#mg-panel-id-edit").val();
        }else{
            var className = $("#mg-panel-class").val();
            var id =  null;
        }
        if( $(this).val()=="0" || $(this).val()== null){
            $(this).closest('.modal-body').find(".mg-content-html").next().show();
        }else{
            $(this).closest('.modal-body').find(".mg-content-html").next().hide();
        }
        JSONParser.request(
            'contentModuleDetails'
            , {id: id,
              class: className,
              "panel[contentModule]": $(this).val(),
            },
            function (data) {
                $(".mg-content-html").html(data.contentHtml);
        });
    });
    //Cloning add
    $(".mg-wrapper").delegate(".mg-clone-add", "click", function (e) {
        e.preventDefault();
        var prototype = $(this).data('prototypetarget');
        var content = $(prototype).clone();
        content.show();
         content.find("input,textarea").each(function(){
             $(this).removeAttr('disabled');
         })
        content.removeAttr('id');
        $(this).closest('.modal-body').find('.target-clone').append(content);
    });
    //Cloning remove
    $(".mg-wrapper").delegate(".mg-clone-remove", "click", function (e) {
        e.preventDefault();
        $(this).closest('.form-group').remove();
    });
    
    //File Reader
    var fileRead = {
        imgResult:  null,
        inputResult: null,
        inputClose: null,
        read: function (input) {
            var file = input.files[0];
            if (file.size >  1048576) {//   1 MB
                $(input).closest('div').addClass('has-error');
                $(input).closest('div').find('.with-errors').show();
                return;
            }
            fileRead.imgResult =  $(input).closest('div').find("img");
            fileRead.inputResult =  $(input).closest('div').find(".mg-cad-input-result");
            $(input).closest('div').find(".mg-cad-input-file-name").val(file.name);
            fileRead.inputClose  = $(input).closest('div').find("button");
            fileReader = new FileReader();
            fileReader.onload = fileRead.pushResult;
            fileReader.readAsDataURL(file);

        },
        pushResult: function () {
            fileRead.imgResult.attr("src",fileReader.result);
            fileRead.inputResult.val(fileReader.result);
            fileRead.inputClose.show();
        }
    };
    //File read
    $(".mg-wrapper").delegate(".mg-cad-file", "change", function (e) {
        if(this.files[0]==  undefined){
            return;
        }
       fileRead.read(this);
    });
    //File delete
    $(".mg-wrapper").delegate(".mg-cad-file-remove", "click", function (e) {
        $(this).hide();
        $(this).closest('div').find("img").attr("src",null);
        $(this).closest('div').find(".mg-cad-input-result").val(null);
        $(this).closest('div').find(".mg-cad-input-file-name").val(null);
        $(this).closest('div').find(".mg-cad-file").val(null);
    });
    
    
     

});