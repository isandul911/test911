{% variable messageClasses %}
	wcMessage {% if isAuthorWpUser %} wcWpMessage {% endif isAuthorWpUser %} {% if isAuthorCurrentUser %} wcCurrentUserMessage {% endif isAuthorCurrentUser %}
{% endvariable messageClasses %}

<div class="{{ messageClasses }}" data-id="{{ messageId }}" data-chat-user-id="{{ messageChatUserId }}">
	{% if showDeleteButton %}
		<a href="javascript://" class="wcAdminAction wcMessageDeleteButton" data-id="{{ messageId }}" title="Delete the message"><img src='{{ baseDir }}/gfx/icons/x.png' class='wcIcon' /></a>
	{% endif showDeleteButton %}
	{% if showBanButton %}
		<a href="javascript://" class="wcAdminAction wcUserBanButton" data-id="{{ messageId }}" title="Ban this user"><img src='{{ baseDir }}/gfx/icons/block.png' class='wcIcon' /></a>
	{% endif showBanButton %}

    <div title="{{ renderedUserName }}">
        <img class="item__avatar" {{avatarSrc}}
        <span class="wcMessageContent" {% if isTextColorSet %}
              style="color:{{ textColor }}"{% endif isTextColorSet %}>
            {{ messageContent }}
        </span>
    </div>
    <div class="right_col">
        <span class="wcMessageTime" data-utc="{{ messageTimeUTC }}" {% if isTextColorSet %}
              style="color:{{ textColor }}"{% endif isTextColorSet %}>
        </span>
    </div>
</div>
