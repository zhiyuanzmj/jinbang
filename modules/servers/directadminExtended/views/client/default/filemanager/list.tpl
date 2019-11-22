<tbody id="files-table">
{if $files && !$files->isEmpty()}
    {foreach from=$files item="file"}
        {if $file->isFile()}
        <tr>
            <td>{if $file->getAbsDir() neq $path}<input type="checkbox" name="files[]" value="{$file->getName()}">{/if}</td>
            <td>{if $file->isDir()}
                <a href="clientarea.php?action=productdetails&id={$productid}&modop=custom&a=management&page=filemanager&dir={$file->getAbsDir()|urlencode}">
                    <img src="{$_assets_dir}img/fm/folder.png" alt="Directory" /> {if $file->getAbsDir() neq $path}{$file->getName()}{else}..{/if}</a>
                {else}
                    <a target="_blank" href="clientarea.php?action=productdetails&id={$productid}&modop=custom&a=management&page=filemanager&file={$smarty.request.dir|urlencode}%2F{$file->getName()|urlencode}&act=download">
                        <img src="{$_assets_dir}img/fm/file.png" alt="File" /> {$file->getName()}</a>
                {/if}
            </td>
            <td>{$file->getHumanSize()}</td>
            <td>{$file->getModificationDate()}</td>
            <td class="chmodval">{$file->getPermissionsValue()}</td>
            <td>{$file->getUID()}</td>
            <td>{$file->getGID()}</td>
            <td>
                {if $file->getAbsDir() neq $path}
                    <a class="action-rename" data-modal="#modal-rename" data-file="{$smarty.request.dir}/{$file->getName()}" data-filename="{$file->getName()}">
                        <img src="{$_assets_dir}img/fm/rename.png" alt="" title="{$lang.rename}"/> 
                    </a>
                    <a class="action-copy" data-modal="#modal-copy" data-file="{$smarty.request.dir}/{$file->getName()}" data-filename="{$file->getName()}">
                        <img src="{$_assets_dir}img/fm/copy.png" alt="" title="{$lang.copy}"/>
                    </a>
                {/if}
            </td>
        </tr>
        {/if}
    {/foreach}
{else}
    <tr>
        <td colspan="8" style="text-align: center">{$lang.no_files_are_available}</td>
    </tr>
{/if}
</tbody>
