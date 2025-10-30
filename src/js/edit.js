import ServerSideRender from "@wordpress/server-side-render";
import {
	useBlockProps,
	InspectorControls,
	PanelColorSettings,
} from "@wordpress/block-editor";
import {
	PanelBody,
	ToggleControl,
	Icon,
	ButtonGroup,
	Button,
} from "@wordpress/components";
import {
	flipHorizontal as iconFlipHorizontal,
	flipVertical as iconFlipVertical,
} from "@wordpress/icons";

export default function Edit({ attributes, setAttributes }) {
	const {
		waveColor = "",
		backgroundColor = "",
		flipHorizontal = false,
		flipVertical = false,
	} = attributes;

	const blockProps = useBlockProps();

	return (
		<div {...blockProps}>
			<InspectorControls>
				<PanelColorSettings
					title="Farben"
					colorSettings={[
						{
							value: waveColor,
							onChange: (val) =>
								setAttributes({ waveColor: val || "" }),
							label: "Welle",
							clearable: true,
						},
						{
							value: backgroundColor,
							onChange: (val) =>
								setAttributes({ backgroundColor: val || "" }),
							label: "Hintergrund",
							clearable: true,
						},
					]}
				/>
<PanelBody title="Ausrichtung" initialOpen>
					<Button
						isPressed={!!flipHorizontal}
						className="flip"
						aria-pressed={!!flipHorizontal}
						onClick={() =>
							setAttributes({ flipHorizontal: !flipHorizontal })
						}
						label="Horizontal spiegeln"
					>
						<Icon icon={iconFlipHorizontal} />
						<span style={{ marginLeft: "6px" }}>
							Horizontal spiegeln
						</span>
					</Button>
					<Button
						isPressed={!!flipVertical}
						className="flip"
						aria-pressed={!!flipVertical}
						onClick={() =>
							setAttributes({ flipVertical: !flipVertical })
						}
						label="Vertikal spiegeln"
					>
						<Icon icon={iconFlipVertical} />
						<span style={{ marginLeft: "6px" }}>
							Vertikal spiegeln
						</span>
					</Button>
				</PanelBody>
			</InspectorControls>

			<ServerSideRender
				block="ud/wellen-grafik"
				attributes={attributes}
			/>
		</div>
	);
}
