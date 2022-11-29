/**
 * BLOCK: reaction review
 *
 * 
 */

const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;


registerBlockType( 'gutlent-blocks/gutlent-reaction-review', {
	title: __( 'Reaction Review', 'gutlent' ),
	icon: 'dashicons-post-status', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	keywords: [
		__( 'Reaction', 'gutlent' ),
		__( 'Review', 'gutlent' ),
		__( 'Like', 'gutlent' ),
		__( 'Dislike', 'gutlent' ),
	],
	edit: EditComponent,
	save: function () {
	    return null
	}

} );


function EditComponent( props ) {


	return(
		<div className="makeUpYourBlockTypeName">Say hello TEst</div>

	)

}