<?php
defined('ABSPATH') || exit;

$attrs = wp_parse_args($attributes ?? [], [
    'waveColor'       => '',
    'backgroundColor' => '',
    'flipHorizontal'  => false,
    'flipVertical'    => false,
    'className'       => '',
]);

$waveColor = $attrs['waveColor'] ?: '#000'; // leer → schwarz
$bgColor   = $attrs['backgroundColor'] ?: 'transparent';

$flipX     = !empty($attrs['flipHorizontal']);
$flipY     = !empty($attrs['flipVertical']);
$className = sanitize_html_class($attrs['className'] ?? '');

$wrapper_classes = [
    'wp-block-group',
    'wellen_container',
    'alignfull',
    'has-background',
    'is-layout-constrained',
    'wp-block-group-is-layout-constrained',
];

$svg_classes = array_filter([
    'wellen_svg',
    $flipX ? 'is-flipped-x' : '',
    $flipY ? 'is-flipped-y' : '',
    $className,
]);

$path_d = "M947,89.6C665.4,164.4,331,231,0,221v10h1920V50.2C1578.4,-16.8,1266.3,4.9,947,89.6Z";

ob_start();
?>
<div class="<?php echo esc_attr(implode(' ', $wrapper_classes)); ?>">
  <svg class="<?php echo esc_attr(implode(' ', $svg_classes)); ?>"
       xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 1920 230"
       preserveAspectRatio="none"
       aria-hidden="true"
       focusable="false">
    <?php if ($bgColor !== 'transparent') : ?>
      <rect width="1920" height="230" style="fill: <?php echo esc_attr($bgColor); ?>;" />
    <?php endif; ?>
    <path d="<?php echo $path_d; ?>" style="fill: <?php echo esc_attr($waveColor); ?>;" />
  </svg>
</div>
<?php
echo ob_get_clean();
