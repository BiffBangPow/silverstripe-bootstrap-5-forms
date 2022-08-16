<div $AttributesHTML>
	<% if $Options.Count %>
		<% loop $Options %>
			<div class="$Class form-check" role="$Role">
				<input id="$ID" class="form-check-input" name="$Name" type="checkbox" value="$Value.ATT"<% if $isChecked %> checked="checked"<% end_if %><% if $isDisabled %> disabled="disabled"<% end_if %> />
				<label class="form-check-label" for="$ID">$Title</label>
			</div>
		<% end_loop %>
	<% else %>
        <div class="alert alert-secondary" role="alert">
            <%t SilverStripe\\Forms\\CheckboxSetField_ss.NOOPTIONSAVAILABLE 'No options available' %>
        </div>
	<% end_if %>
</div>
