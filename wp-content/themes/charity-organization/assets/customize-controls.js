( function( api ) {

	// Extends our custom "charity-organization" section.
	api.sectionConstructor['charity-organization'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );