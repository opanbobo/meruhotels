import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, InspectorControls, useBlockProps } from '@wordpress/block-editor';
import {
	TextareaControl,
	TextControl,
	PanelBody
} from '@wordpress/components';

registerBlockType( 'rk/div', {
	edit: ({
		attributes,
		setAttributes,
	}) => {
		const blockProps = useBlockProps();

		const {
			rkId,
			className
		} = attributes;

        return (
			<>
				<InspectorControls>
					<PanelBody
						title={ __( 'Column size', 'rk' ) }
						initialOpen={ true }
					>
						<TextControl
							label={ __( 'ID', 'rk' ) }
							value={ rkId || '' }
							onChange={ ( value ) => {
								setAttributes( {
									rkId: value,
								} );
							} }
						/>
						<TextareaControl
							label={ __( 'Class', 'rk' ) }
							value={ className || '' }
							rows={ 8 }
							onChange={ ( value ) => {
								setAttributes( {
									className: value,
								} );
							} }
						/>
					</PanelBody>
				</InspectorControls>
				<div rkId={rkId} { ...blockProps }>
					<InnerBlocks />
				</div>
			</>
        );
	},
	save: () => {
		return <InnerBlocks.Content />;
	},
} );


