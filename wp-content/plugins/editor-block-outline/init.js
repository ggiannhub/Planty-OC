(function ($) {
	$(document).ready(() => {
		const root = getDocumentRoot();
		const body = getDocumentBody();
		body.attr('show-outline', outlineUserOptions.show_outline);
		body.attr('show-block-name', outlineUserOptions.show_block_name);
		body.attr('show-class-name', outlineUserOptions.show_class_name);
		body.attr('lock-block-outline', outlineUserOptions.lock_block_outline);
		body.attr('block-data-position', outlineUserOptions.block_data_position);
		body.attr('enable-outline-padding', outlineUserOptions.enable_outline_padding);

		// Update outline color
		const c = jQuery.Color(outlineUserOptions.outline_color);
		c.toHslaString();

		// Form HSLA color
		const saturation = Math.round(c._hsla[1] * 100);
		const lightness = Math.round(c._hsla[2] * 100);

		const hsla = `hsla(${c._hsla[0]}deg, ${saturation}%, ${lightness}%, var(--outline-opacity))`;
		root.style.setProperty('--outline-color', hsla);

		// update text color
		const colorLightness = c.lightness();
		let color = '#000000';
		if (colorLightness < 0.5) {
			color = '#ffffff';
		}
		root.style.setProperty('--outline-text-color', color);

		// Set line style
		root.style.setProperty('--outline-style', outlineUserOptions.outline_style);

		// Set outline opacity
		const opacity = outlineUserOptions.outline_opacity / 100;
		root.style.setProperty('--outline-opacity', opacity);

		// Set outline padding
		const padding = outlineUserOptions.outline_padding;
		root.style.setProperty('--outline-padding', `${padding}px`);
	});
})(jQuery);
