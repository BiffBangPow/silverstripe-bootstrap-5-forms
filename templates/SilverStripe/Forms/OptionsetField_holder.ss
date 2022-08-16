<div id="$HolderID" class="mb-4 field<% if $extraClass %> $extraClass<% end_if %>">
    <% if $Title || $RightTitle %>
        <label class="form-label">
            $Title
            <% if $RightTitle %>
                <span data-tooltip="$RightTitle">
                    <svg style="height: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S224 177.7 224 160C224 142.3 238.3 128 256 128zM296 384h-80C202.8 384 192 373.3 192 360s10.75-24 24-24h16v-64H224c-13.25 0-24-10.75-24-24S210.8 224 224 224h32c13.25 0 24 10.75 24 24v88h16c13.25 0 24 10.75 24 24S309.3 384 296 384z"/></svg>
                </span>
            <% end_if %>
        </label>
    <% end_if %>
    $Field
    <% if $Message %>
        <div id="{$HolderID}MessageBlock" class="form-text form-text-message">
            $Message
        </div>
    <% end_if %>
    <% if $Description %>
        <div id="{$HolderID}DescriptionBlock" class="form-text form-text-description">
            $Description
        </div>
    <% end_if %>
</div>