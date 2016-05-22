<# if ( data.label ) { #>
	<span class="butterbean-label">{{ data.label }}</span>
	<br />
<# } #>

<# if ( data.description ) { #>
	<span class="butterbean-description">{{{ data.description }}}</span>
	<br />
<# } #>

<div class="butterbean-multi-avatars-wrap">

	<# _.each( data.choices, function( user ) { #>

		<label>
			<input type="checkbox" value="{{ user.id }}" name="{{ data.name }}" <# if ( -1 !== data.value.indexOf( user.id ) ) { #> checked="checked" <# } #> />

			<span class="screen-reader-text">{{ user.name }}</span>

			{{{ user.avatar }}}
		</label>

	<# } ) #>

</div><!-- .butterbean-multi-avatars-wrap -->
