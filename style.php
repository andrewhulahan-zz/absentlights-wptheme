<?php header("Content-type: text/css");
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60 * 24 * 7))); // 1 week

$colors;
$color;
$accent;

function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}

$colors = array('#f35','#6ea','#bd4','#3cf','#fb4');
$colorpick = array_rand($colors, 1);
$color = $colors[$colorpick];

if ($color == '#f35') {
	$accent = '#6ea';
} elseif ($color == '#6ea' || $color == '#3cf') {
	$accent = '#fb4';
} elseif ($color == '#bd4') {
	$accent = '#f35';
} elseif ($color == '#fb4') {
	$accent = '#3cf';
}
$rgba = hex2rgba($color, 0.5);

?>

#page-content p a {
    color: <?=$color?>;
}
#page-content a:hover {
	color: <?= $accent ?>; 
}
.menu-item a {
    color: <?= $color ?>; 
}
.menu-item a:hover {
	color: <?= $accent ?>; 
}
.post-title-meta {
	background: <?= $rgba ?>; 
}
.post-title-meta a {
    color: #fff; 
}
.hamburger:hover {
	color: <?= $color ?>;
}
.hamburger.mega-octicon.octicon-x {
	color: <?= $color ?>;
}
#nav-below a {
	color: <?= $color ?>; 
}
#nav-below a:hover {
	color: <?= $color ?>; 
}
.logo a:hover {
	color: <?= $color ?>; 
}
.lemon-x:hover {
    color: <?= $accent ?>;
}
.lemon-link:hover {
    color: <?= $accent ?>;
}
