import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

registerBlockType( 'rk/div', {
	edit: () => {
		const blockProps = useBlockProps();

        return (
            <div { ...blockProps }>
                <InnerBlocks />
            </div>
        );
	},
	save: () => {
		return <InnerBlocks.Content />;
	},
} );


