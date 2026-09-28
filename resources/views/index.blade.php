<!doctype html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home – Terrace</title>
	<meta name="robots" content="max-image-preview:large">
	<link rel="alternate" type="application/rss+xml" title="Terrace » Feed"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/feed/">
	<link rel="alternate" type="application/rss+xml" title="Terrace » Comments Feed"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/comments/feed/">
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fview.kitpixel.com%2Fterrace%2Ftemplate-kit%2Fhome%2F">
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fview.kitpixel.com%2Fterrace%2Ftemplate-kit%2Fhome%2F&amp;format=xml">
	<style id="wp-img-auto-sizes-contain-inline-css">
		img:is([sizes=auto i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px
		}

		/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
	</style>
	<link rel="stylesheet" id="elementor-frontend-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="elementor-post-50-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/elementor/css/post-50.css?ver=1787532900"
		media="all">
	<link rel="stylesheet" id="elementor-post-59-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/elementor/css/post-59.css?ver=1787532900"
		media="all">
	<link rel="stylesheet" id="font-awesome-5-all-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=4.2.3"
		media="all">
	<style id="wp-emoji-styles-inline-css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}

		/*# sourceURL=wp-emoji-styles-inline-css */
	</style>
	<style id="global-styles-inline-css">
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
			--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
		}

		.wp-block-button {
			--wp--preset--dimension--25: 25%;
			--wp--preset--dimension--50: 50%;
			--wp--preset--dimension--75: 75%;
			--wp--preset--dimension--100: 100%;
		}

		:root {
			--wp--style--global--content-size: 800px;
			--wp--style--global--wide-size: 1200px;
		}

		:where(body) {
			margin: 0;
		}

		.wp-site-blocks>.alignleft {
			float: left;
			margin-right: 2em;
		}

		.wp-site-blocks>.alignright {
			float: right;
			margin-left: 2em;
		}

		.wp-site-blocks>.aligncenter {
			justify-content: center;
			margin-left: auto;
			margin-right: auto;
		}

		:where(.wp-site-blocks)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:where(.wp-site-blocks)> :first-child {
			margin-block-start: 0;
		}

		:where(.wp-site-blocks)> :last-child {
			margin-block-end: 0;
		}

		:root {
			--wp--style--block-gap: 24px;
		}

		:root :where(.is-layout-flow)> :first-child {
			margin-block-start: 0;
		}

		:root :where(.is-layout-flow)> :last-child {
			margin-block-end: 0;
		}

		:root :where(.is-layout-flow)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:root :where(.is-layout-constrained)> :first-child {
			margin-block-start: 0;
		}

		:root :where(.is-layout-constrained)> :last-child {
			margin-block-end: 0;
		}

		:root :where(.is-layout-constrained)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:root :where(.is-layout-flex) {
			gap: 24px;
		}

		:root :where(.is-layout-grid) {
			gap: 24px;
		}

		.is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		body {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}

		:root :where(.wp-element-button, .wp-block-button__link) {
			background-color: #32373c;
			border-width: 0;
			color: #fff;
			font-family: inherit;
			font-size: inherit;
			font-style: inherit;
			font-weight: inherit;
			letter-spacing: inherit;
			line-height: inherit;
			padding-top: calc(0.667em + 2px);
			padding-right: calc(1.333em + 2px);
			padding-bottom: calc(0.667em + 2px);
			padding-left: calc(1.333em + 2px);
			text-decoration: none;
			text-transform: inherit;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:root :where(.wp-block-icon svg) {
			width: 24px;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}

		/*# sourceURL=global-styles-inline-css */
	</style>
	<link rel="stylesheet" id="template-kit-export-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public.css?ver=1.0.23"
		media="all">
	<link rel="stylesheet" id="cute-alert-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/metform/public/assets/lib/cute-alert/style.css?ver=4.2.0"
		media="all">
	<link rel="stylesheet" id="text-editor-style-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/metform/public/assets/css/text-editor.css?ver=4.2.0"
		media="all">
	<link rel="stylesheet" id="hello-elementor-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/themes/hello-elementor/assets/css/reset.css?ver=3.5.1"
		media="all">
	<link rel="stylesheet" id="hello-elementor-theme-style-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/themes/hello-elementor/assets/css/theme.css?ver=3.5.1"
		media="all">
	<link rel="stylesheet" id="hello-elementor-header-footer-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/themes/hello-elementor/assets/css/header-footer.css?ver=3.5.1"
		media="all">
	<link rel="stylesheet" id="elementor-post-3-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/elementor/css/post-3.css?ver=1787532900"
		media="all">
	<link rel="stylesheet" id="e-animation-fadeInUp-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="ekit-widget-common-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/css/common.css?ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="ekit-heading-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/css/heading.css?ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="widget-icon-list-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-heading-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-image-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="swiper-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5"
		media="all">
	<link rel="stylesheet" id="e-swiper-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-image-carousel-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-image-carousel.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-spacer-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-counter-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-counter.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-image-box-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-image-box.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-icon-box-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="widget-divider-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=4.2.3"
		media="all">
	<link rel="stylesheet" id="mediaelement-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17"
		media="all">
	<link rel="stylesheet" id="wp-mediaelement-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=7.1.1"
		media="all">
	<link rel="stylesheet" id="magnific-popup-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/assets/libs/magnific-popup/magnific-popup.css?ver=1790077428"
		media="all">
	<link rel="stylesheet" id="ekit-video-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/css/video.css?ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="elementor-post-17-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/elementor/css/post-17.css?ver=1787532901"
		media="all">
	<link rel="stylesheet" id="ekit-nav-menu-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/css/nav-menu.css?ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="ekit-header-search-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/css/header-search.css?ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="ekit-header-offcanvas-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/css/header-offcanvas.css?ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="ekit-header-info-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/css/header-info.css?ver=4.0.2"
		media="all">
	<link rel="stylesheet" id="elementor-gf-fraunces-css"
		href="https://fonts.googleapis.com/css?family=Fraunces:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=auto"
		media="all">
	<link rel="stylesheet" id="elementor-gf-inter-css"
		href="https://fonts.googleapis.com/css?family=Inter:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=auto"
		media="all">
	<script type="text/javascript">
		var elementskit = {
			resturl: '{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-json/elementskit/v1/',
		}

	</script>
	<script id="font-awesome-4-shim-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=4.2.3"></script>
	<script id="jquery-core-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
	<script id="jquery-migrate-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
	<script id="template-kit-export-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public.js?ver=1.0.23"></script>
	<link rel="https://api.w.org/" href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-json/">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/xmlrpc.php?rsd">
	<meta name="generator" content="WordPress 7.1.1">
	<link rel="canonical" href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/home/">
	<link rel="shortlink" href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/?p=17">

	<!-- GA Google Analytics @ https://m0n.co/ga -->
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-F59BZKS3MB"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'G-F59BZKS3MB');
	</script>

	<meta name="generator"
		content="Elementor 4.2.3; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
	<style>
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {

			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {

			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
	</style>
	<style>
		.mfp-fade-5c966ad {
			background-color: ;
		}
	</style>
	<style>
		.mfp-fade-537b8a5 {
			background-color: ;
		}
	</style>
</head>

<body
	class="wp-singular envato_tk_templates-template-default single single-envato_tk_templates postid-17 wp-embed-responsive wp-theme-hello-elementor hello-elementor-default elementor-default elementor-kit-3 elementor-page elementor-page-17 e--ua-firefox" data-elementor-device-mode="desktop">


	<a class="skip-link screen-reader-text" href="#content">
		Skip to content </a>


	<div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
		<div data-elementor-type="wp-post" data-elementor-id="50" class="elementor elementor-50">
			<div class="elementor-element elementor-element-e7d795f e-flex e-con-boxed e-con e-parent e-lazyloaded"
				data-id="e7d795f" data-element_type="container" data-e-type="container"
				data-settings="{&quot;position&quot;:&quot;absolute&quot;}">
				<div class="e-con-inner">
					<div class="elementor-element elementor-element-aba9955 e-con-full e-flex e-con e-child"
						data-id="aba9955" data-element_type="container" data-e-type="container">
						<div class="elementor-element elementor-element-0351de8 e-con-full e-flex e-con e-child"
							data-id="0351de8" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-3f9aa03 elementor-widget elementor-widget-image animated fadeInDown"
								data-id="3f9aa03" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
								data-widget_type="image.default">
								<img width="274" height="80"
									src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/seed-stone-logo.png"
									class="attachment-full size-full wp-image-52" alt="">
							</div>
						</div>
						<div class="elementor-element elementor-element-60f7eeb e-con-full e-flex e-con e-child"
							data-id="60f7eeb" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-24859a0 elementor-widget elementor-widget-ekit-nav-menu animated fadeInDown"
								data-id="24859a0" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:&quot;500&quot;}"
								data-widget_type="ekit-nav-menu.default">
								<div class="elementor-widget-container">
									<nav class="ekit-wid-con ekit_menu_responsive_tablet"
										data-hamburger-icon="icon icon-menu-11" data-hamburger-icon-type="icon"
										data-responsive-breakpoint="1024" data-close-on-anchor="no">
										<button class="elementskit-menu-hamburger elementskit-menu-toggler"
											type="button" aria-label="hamburger-icon">
											<svg class="ekit-menu-icon ekit-svg-icon icon-menu-11" viewBox="0 0 32 32"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M30.707 15.107h-29.415c-0.714 0-1.293 0.579-1.293 1.293s0.579 1.293 1.293 1.293h29.415c0.714 0 1.293-0.579 1.293-1.293s-0.579-1.293-1.293-1.293zM30.707 5.302h-29.415c-0.714 0-1.293 0.579-1.293 1.293s0.579 1.293 1.293 1.293h29.415c0.714 0 1.293-0.579 1.293-1.293s-0.579-1.293-1.293-1.293zM30.707 24.912h-29.415c-0.714 0-1.293 0.579-1.293 1.293s0.579 1.293 1.293 1.293h29.415c0.714 0 1.293-0.579 1.293-1.293s-0.579-1.293-1.293-1.293z">
												</path>
											</svg> </button>
										<div id="ekit-megamenu-menu"
											class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default ekit-nav-menu-one-page-no ekit-nav-dropdown-hover"
											ekit-dom-added="yes">
											<ul id="menu-menu"
												class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon">
												<li id="menu-item-5"
													class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-5 nav-item elementskit-mobile-builder-content active"
													data-vertical-menu="750px"><a
														href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/home/"
														class="ekit-menu-nav-link active">Home</a></li>
												<li id="menu-item-15"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-15 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
													data-vertical-menu="750px"><a href="#"
														class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Pages<svg
															class="elementskit-submenu-indicator ekit-svg-icon icon-arrow-point-to-down"
															viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
															<path d="M0 8.4h32l-16 16-16-16z"></path>
														</svg></a>
													<ul class="elementskit-dropdown elementskit-submenu-panel">
														<li id="menu-item-7"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7 nav-item elementskit-mobile-builder-content"
															data-vertical-menu="750px"><a
																href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/about/"
																class=" dropdown-item">About</a> </li>
														<li id="menu-item-14"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 nav-item elementskit-mobile-builder-content"
															data-vertical-menu="750px"><a
																href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/before-&amp;-after/"
																class=" dropdown-item">Before &amp; After</a> </li>
														<li id="menu-item-9"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9 nav-item elementskit-mobile-builder-content"
															data-vertical-menu="750px"><a
																href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/single-service/"
																class=" dropdown-item">Single Service</a> </li>
														<li id="menu-item-8"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8 nav-item elementskit-mobile-builder-content"
															data-vertical-menu="750px"><a
																href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/contact/"
																class=" dropdown-item">Contact</a> </li>
														<li id="menu-item-11"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11 nav-item elementskit-mobile-builder-content"
															data-vertical-menu="750px"><a
																href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/blog/"
																class=" dropdown-item">Blog</a> </li>
														<li id="menu-item-12"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12 nav-item elementskit-mobile-builder-content"
															data-vertical-menu="750px"><a
																href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/post/"
																class=" dropdown-item">Post</a></li>
													</ul>
												</li>
												<li id="menu-item-6"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6 nav-item elementskit-mobile-builder-content"
													data-vertical-menu="750px"><a
														href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/services/"
														class="ekit-menu-nav-link">Services</a></li>
												<li id="menu-item-13"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13 nav-item elementskit-mobile-builder-content"
													data-vertical-menu="750px"><a
														href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/pricing/"
														class="ekit-menu-nav-link">Pricing</a></li>
												<li id="menu-item-10"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10 nav-item elementskit-mobile-builder-content"
													data-vertical-menu="750px"><a
														href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/template-kit/our-works/"
														class="ekit-menu-nav-link">Our Works</a></li>
											</ul>
											<div class="elementskit-nav-identity-panel"><a class="elementskit-nav-logo"
													href="{{ request()->getSchemeAndHttpHost() }}/seed-stone" target="" rel=""><img
														src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/seed-stone-logo.png"
														title="seed-stone-logo" alt="seed-stone-logo"
														decoding="async"></a><button
													class="elementskit-menu-close elementskit-menu-toggler"
													type="button">X</button></div>
										</div>
										<div
											class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
										</div>
									</nav>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-15f18f3 e-con-full elementor-hidden-mobile e-flex e-con e-child"
							data-id="15f18f3" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-30b8e70 elementor-widget elementor-widget-button animated fadeInDown"
								data-id="30b8e70" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:&quot;750&quot;}"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Start Planning</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<main id="content" class="site-main post-17 envato_tk_templates type-envato_tk_templates status-publish has-post-thumbnail hentry">

		<div class="page-content">

			<div data-elementor-type="wp-post" data-elementor-id="17" class="elementor elementor-17">
				<div class="elementor-element elementor-element-89f0de1 e-con-full e-flex e-con e-parent e-lazyloaded"
					data-id="89f0de1" data-element_type="container" data-e-type="container"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-element elementor-element-a04cf4c elementor-absolute elementor-widget elementor-widget-elementskit-heading animated fadeInUp"
						data-id="a04cf4c" data-element_type="widget" data-e-type="widget"
						data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;750&quot;}"
						data-widget_type="elementskit-heading.default">
						<div class="ekit-wid-con">
							<div
								class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
								<div class="ekit-heading--title elementskit-section-title text_fill">
									<span>Terrace</span></div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-1260c29 e-con-full e-flex e-con e-child"
						data-id="1260c29" data-element_type="container" data-e-type="container">
						<div class="elementor-element elementor-element-7f8fd61 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list animated fadeInUp"
							data-id="7f8fd61" data-element_type="widget" data-e-type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
							data-widget_type="icon-list.default">
							<ul class="elementor-icon-list-items">
								<li class="elementor-icon-list-item">
									<span class="elementor-icon-list-icon">
										<svg class="ekit-svg-icon icon-star-1" viewBox="0 0 32 32"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M32 12.967c0-0.474-0.359-0.769-1.077-0.885l-9.654-1.404-4.327-8.75c-0.243-0.526-0.558-0.788-0.942-0.788s-0.699 0.263-0.942 0.788l-4.327 8.75-9.654 1.404c-0.718 0.116-1.077 0.41-1.077 0.885 0 0.269 0.16 0.577 0.481 0.923l7 6.808-1.654 9.615c-0.026 0.18-0.038 0.308-0.038 0.385 0 0.269 0.067 0.497 0.202 0.683s0.336 0.279 0.606 0.279c0.231 0 0.487-0.077 0.769-0.231l8.634-4.539 8.635 4.539c0.27 0.154 0.526 0.231 0.769 0.231 0.257 0 0.452-0.093 0.587-0.279s0.201-0.413 0.201-0.683c0-0.166-0.006-0.295-0.019-0.385l-1.654-9.615 6.981-6.808c0.334-0.333 0.5-0.641 0.5-0.923z">
											</path>
										</svg> </span>
									<span class="elementor-icon-list-text">4,9/5 on Google Reviews</span>
								</li>
							</ul>
						</div>
						<div class="elementor-element elementor-element-7d04007 elementor-widget elementor-widget-heading animated fadeInUp"
							data-id="7d04007" data-element_type="widget" data-e-type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
							data-widget_type="heading.default">
							<h1 class="elementor-heading-title elementor-size-default">Transform Your Outdoor Space with
								Expert Landscape Care</h1>
						</div>
						<div class="elementor-element elementor-element-5d30339 elementor-widget-tablet__width-initial elementor-widget elementor-widget-text-editor animated fadeInUp"
							data-id="5d30339" data-element_type="widget" data-e-type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
							data-widget_type="text-editor.default">
							<p>From custom garden design to full-service maintenance, we help you build an outdoor space
								that’s clean, healthy, and inspiring.</p>
						</div>
						<div class="elementor-element elementor-element-cce6da9 e-con-full e-flex e-con e-child"
							data-id="cce6da9" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-54dcf3e elementor-mobile-align-justify elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button animated fadeInUp"
								data-id="54dcf3e" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Request a Quote</span>
									</span>
								</a>
							</div>
							<div class="elementor-element elementor-element-cace790 elementor-mobile-align-justify elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button animated fadeInUp"
								data-id="cace790" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Our Services</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-91dde1f e-con-full e-flex e-con e-child"
						data-id="91dde1f" data-element_type="container" data-e-type="container">
						<div class="elementor-element elementor-element-ac55e1a elementor-widget elementor-widget-image"
							data-id="ac55e1a" data-element_type="widget" data-e-type="widget"
							data-widget_type="image.default">
							<img fetchpriority="high" decoding="async" width="1920" height="1280"
								src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc.webp"
								class="attachment-full size-full wp-image-80" alt=""
								srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-300x200.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-1024x683.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-768x512.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-1536x1024.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-800x533.webp 800w"
								sizes="(max-width: 1920px) 100vw, 1920px">
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-24ce88c e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="24ce88c" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-2de9694 e-con-full e-flex e-con e-child animated fadeInUp"
							data-id="2de9694" data-element_type="container" data-e-type="container"
							data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
							<div class="elementor-element elementor-element-872410c elementor-widget elementor-widget-image-carousel e-widget-swiper"
								data-id="872410c" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;80&quot;,&quot;sizes&quot;:[]},&quot;slides_to_show_tablet&quot;:&quot;4&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
								data-widget_type="image-carousel.default">
								<div class="elementor-image-carousel-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events"
									role="region" aria-roledescription="carousel" aria-label="Image Carousel" dir="ltr">
									<div class="elementor-image-carousel swiper-wrapper" aria-live="off"
										style="transition-duration: 0ms; transform: translate3d(-2448px, 0px, 0px);"
										id="swiper-wrapper-db6eabf101335fe02">
										<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
											role="group" aria-roledescription="slide" aria-label="4 / 8"
											data-swiper-slide-index="3" style="width: 192px; margin-right: 80px;"
											aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-04.png"
													alt="logo-04"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
											role="group" aria-roledescription="slide" aria-label="5 / 8"
											data-swiper-slide-index="4" style="width: 192px; margin-right: 80px;"
											aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-05.png"
													alt="logo-05"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
											role="group" aria-roledescription="slide" aria-label="6 / 8"
											data-swiper-slide-index="5" style="width: 192px; margin-right: 80px;"
											aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-06.png"
													alt="logo-06"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate" role="group"
											aria-roledescription="slide" aria-label="7 / 8" data-swiper-slide-index="6"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-07.png"
													alt="logo-07"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate" role="group"
											aria-roledescription="slide" aria-label="8 / 8" data-swiper-slide-index="7"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-08.png"
													alt="logo-08"></figure>
										</div>
										<div class="swiper-slide" role="group" aria-roledescription="slide"
											aria-label="1 / 8" data-swiper-slide-index="0"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-01.png"
													alt="logo-01"></figure>
										</div>
										<div class="swiper-slide" role="group" aria-roledescription="slide"
											aria-label="2 / 8" data-swiper-slide-index="1"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-02.png"
													alt="logo-02"></figure>
										</div>
										<div class="swiper-slide" role="group" aria-roledescription="slide"
											aria-label="3 / 8" data-swiper-slide-index="2"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-03.png"
													alt="logo-03"></figure>
										</div>
										<div class="swiper-slide swiper-slide-prev" role="group"
											aria-roledescription="slide" aria-label="4 / 8" data-swiper-slide-index="3"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-04.png"
													alt="logo-04"></figure>
										</div>
										<div class="swiper-slide swiper-slide-active" role="group"
											aria-roledescription="slide" aria-label="5 / 8" data-swiper-slide-index="4"
											style="width: 192px; margin-right: 80px;">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-05.png"
													alt="logo-05"></figure>
										</div>
										<div class="swiper-slide swiper-slide-next" role="group"
											aria-roledescription="slide" aria-label="6 / 8" data-swiper-slide-index="5"
											style="width: 192px; margin-right: 80px;">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-06.png"
													alt="logo-06"></figure>
										</div>
										<div class="swiper-slide" role="group" aria-roledescription="slide"
											aria-label="7 / 8" data-swiper-slide-index="6"
											style="width: 192px; margin-right: 80px;">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-07.png"
													alt="logo-07"></figure>
										</div>
										<div class="swiper-slide" role="group" aria-roledescription="slide"
											aria-label="8 / 8" data-swiper-slide-index="7"
											style="width: 192px; margin-right: 80px;">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-08.png"
													alt="logo-08"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate" role="group"
											aria-roledescription="slide" aria-label="1 / 8" data-swiper-slide-index="0"
											style="width: 192px; margin-right: 80px;">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-01.png"
													alt="logo-01"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate" role="group"
											aria-roledescription="slide" aria-label="2 / 8" data-swiper-slide-index="1"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-02.png"
													alt="logo-02"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate" role="group"
											aria-roledescription="slide" aria-label="3 / 8" data-swiper-slide-index="2"
											style="width: 192px; margin-right: 80px;" aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-03.png"
													alt="logo-03"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
											role="group" aria-roledescription="slide" aria-label="4 / 8"
											data-swiper-slide-index="3" style="width: 192px; margin-right: 80px;"
											aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-04.png"
													alt="logo-04"></figure>
										</div>
										<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
											role="group" aria-roledescription="slide" aria-label="5 / 8"
											data-swiper-slide-index="4" style="width: 192px; margin-right: 80px;"
											aria-hidden="true" inert="">
											<figure class="swiper-slide-inner"><img decoding="async"
													class="swiper-slide-image"
													src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/logo-05.png"
													alt="logo-05"></figure>
										</div>
									</div>

									<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
								</div>
							</div>
							<div class="elementor-element elementor-element-d163777 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer"
								data-id="d163777" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="spacer.default">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
							<div class="elementor-element elementor-element-6c87419 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer"
								data-id="6c87419" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="spacer.default">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-3fc9d7f e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="3fc9d7f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-22d1b5c e-con-full e-flex e-con e-child"
							data-id="22d1b5c" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-ded3721 elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="ded3721" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">Who We Are</div>
							</div>
							<div class="elementor-element elementor-element-7ba4507 elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="7ba4507" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<h2 class="elementor-heading-title elementor-size-default">Trusted Partner for Green,
									Healthy Environments</h2>
							</div>
							<div class="elementor-element elementor-element-d6a3d55 elementor-widget elementor-widget-text-editor animated fadeInUp"
								data-id="d6a3d55" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="text-editor.default">
								<p>For over a decade, our team has helped transform homes and commercial properties into
									lush, organized, and welcoming landscapes. We approach every project with careful
									planning, thoughtful design, and reliable maintenance — ensuring your garden looks
									its best all year long.</p>
							</div>
							<div class="elementor-element elementor-element-833d5a7 elementor-widget elementor-widget-button animated fadeInUp"
								data-id="833d5a7" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Learn More</span>
									</span>
								</a>
							</div>
						</div>
						<div class="elementor-element elementor-element-8c4665f e-con-full e-flex e-con e-child"
							data-id="8c4665f" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-186a133 elementor-widget elementor-widget-image animated fadeInUp"
								data-id="186a133" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
								data-widget_type="image.default">
								<img decoding="async" width="1920" height="1280"
									src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-garden-worker-trimming-plants-using-s-2025-03-14-03-22-40-utc.webp"
									class="attachment-full size-full wp-image-133" alt=""
									srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-garden-worker-trimming-plants-using-s-2025-03-14-03-22-40-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-garden-worker-trimming-plants-using-s-2025-03-14-03-22-40-utc-300x200.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-garden-worker-trimming-plants-using-s-2025-03-14-03-22-40-utc-1024x683.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-garden-worker-trimming-plants-using-s-2025-03-14-03-22-40-utc-768x512.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-garden-worker-trimming-plants-using-s-2025-03-14-03-22-40-utc-1536x1024.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-garden-worker-trimming-plants-using-s-2025-03-14-03-22-40-utc-800x533.webp 800w"
									sizes="(max-width: 1920px) 100vw, 1920px">
							</div>
						</div>
						<div class="elementor-element elementor-element-8b2a54a e-con-full e-flex e-con e-child"
							data-id="8b2a54a" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-aa96e99 elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-counter animated fadeInUp"
								data-id="aa96e99" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="counter.default">
								<div class="elementor-counter">
									<div class="elementor-counter-title">Years of industry experience</div>
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="10"
											data-from-value="0" data-delimiter=",">10</span>
										<span class="elementor-counter-number-suffix">+</span>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-1f775a2 elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-counter animated fadeInUp"
								data-id="1f775a2" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
								data-widget_type="counter.default">
								<div class="elementor-counter">
									<div class="elementor-counter-title">Garderns designed &amp; maintained</div>
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="300"
											data-from-value="0" data-delimiter=",">300</span>
										<span class="elementor-counter-number-suffix">+</span>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-2f44247 elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-counter animated fadeInUp"
								data-id="2f44247" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;500&quot;}"
								data-widget_type="counter.default">
								<div class="elementor-counter">
									<div class="elementor-counter-title">Client satisfaction rate</div>
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="98"
											data-from-value="0" data-delimiter=",">98</span>
										<span class="elementor-counter-number-suffix">%</span>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-435e176 elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-counter animated fadeInUp"
								data-id="435e176" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;750&quot;}"
								data-widget_type="counter.default">
								<div class="elementor-counter">
									<div class="elementor-counter-title">Support for scheduled maintenance</div>
									<div class="elementor-counter-number-wrapper">
										<span class="elementor-counter-number-prefix"></span>
										<span class="elementor-counter-number" data-duration="2000" data-to-value="24"
											data-from-value="24" data-delimiter=",">24</span>
										<span class="elementor-counter-number-suffix">/7</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-32d9ca4 e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="32d9ca4" data-element_type="container" data-e-type="container"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-189bd6e e-con-full e-flex e-con e-child"
							data-id="189bd6e" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-7d9d259 elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="7d9d259" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">What We Offer</div>
							</div>
							<div class="elementor-element elementor-element-74ef56b elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="74ef56b" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<h2 class="elementor-heading-title elementor-size-default">Tailored Gardening &amp;
									Landscape Solutions</h2>
							</div>
							<div class="elementor-element elementor-element-81db4ae elementor-widget elementor-widget-text-editor animated fadeInUp"
								data-id="81db4ae" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="text-editor.default">
								<p>We provide a full range of services to help you build, grow, and maintain a thriving
									outdoor environment.</p>
							</div>
						</div>
						<div class="elementor-element elementor-element-3b729ec e-grid e-con-full e-con e-child"
							data-id="3b729ec" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-0594957 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="0594957" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-08dfd17 elementor-widget elementor-widget-image-box"
									data-id="08dfd17" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<h4 class="elementor-image-box-title">Landscape Design</h4>
											<p class="elementor-image-box-description">Transform your outdoor space with
												custom layouts, plant selections, and functional garden structures
												designed to match your style and needs.</p>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-b70cc79 e-con-full e-flex e-con e-child"
									data-id="b70cc79" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-9237a09 elementor-widget elementor-widget-button"
										data-id="9237a09" data-element_type="widget" data-e-type="widget"
										data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Learn More</span>
											</span>
										</a>
									</div>
									<div class="elementor-element elementor-element-569d1db elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
										data-id="569d1db" data-element_type="widget" data-e-type="widget"
										data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
										data-widget_type="image.default">
										<img loading="lazy" decoding="async" width="1920" height="1280"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/autumn-garden-works-2025-03-13-12-16-05-utc.webp"
											class="attachment-full size-full wp-image-153" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/autumn-garden-works-2025-03-13-12-16-05-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/autumn-garden-works-2025-03-13-12-16-05-utc-300x200.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/autumn-garden-works-2025-03-13-12-16-05-utc-1024x683.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/autumn-garden-works-2025-03-13-12-16-05-utc-768x512.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/autumn-garden-works-2025-03-13-12-16-05-utc-1536x1024.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/autumn-garden-works-2025-03-13-12-16-05-utc-800x533.webp 800w"
											sizes="(max-width: 1920px) 100vw, 1920px">
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-e443e43 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="e443e43" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;250&quot;}">
								<div class="elementor-element elementor-element-2b2c7f3 elementor-widget elementor-widget-image-box"
									data-id="2b2c7f3" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<h4 class="elementor-image-box-title">Garden Maintenance</h4>
											<p class="elementor-image-box-description">Reliable weekly or monthly
												maintenance, including trimming, pruning, weeding, lawn care, and
												seasonal preparation to keep everything healthy and tidy.</p>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-519a921 e-con-full e-flex e-con e-child"
									data-id="519a921" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-ac8efb0 elementor-widget elementor-widget-button"
										data-id="ac8efb0" data-element_type="widget" data-e-type="widget"
										data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Learn More</span>
											</span>
										</a>
									</div>
									<div class="elementor-element elementor-element-2c313c4 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
										data-id="2c313c4" data-element_type="widget" data-e-type="widget"
										data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
										data-widget_type="image.default">
										<img loading="lazy" decoding="async" width="1920" height="1280"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/garden-worker-trimming-plants-during-spring-season-2025-03-13-02-51-36-utc.webp"
											class="attachment-full size-full wp-image-247" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/garden-worker-trimming-plants-during-spring-season-2025-03-13-02-51-36-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/garden-worker-trimming-plants-during-spring-season-2025-03-13-02-51-36-utc-300x200.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/garden-worker-trimming-plants-during-spring-season-2025-03-13-02-51-36-utc-1024x683.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/garden-worker-trimming-plants-during-spring-season-2025-03-13-02-51-36-utc-768x512.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/garden-worker-trimming-plants-during-spring-season-2025-03-13-02-51-36-utc-1536x1024.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/garden-worker-trimming-plants-during-spring-season-2025-03-13-02-51-36-utc-800x533.webp 800w"
											sizes="(max-width: 1920px) 100vw, 1920px">
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-0498ec0 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="0498ec0" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;500&quot;}">
								<div class="elementor-element elementor-element-89494e7 elementor-widget elementor-widget-image-box"
									data-id="89494e7" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<h4 class="elementor-image-box-title">Lawn Care &amp; Turf Restoration</h4>
											<p class="elementor-image-box-description">Professional lawn mowing,
												fertilizing, aeration, and turf repair to keep your grass green, strong,
												and evenly grown.</p>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-39533ab e-con-full e-flex e-con e-child"
									data-id="39533ab" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-13fc96d elementor-widget elementor-widget-button"
										data-id="13fc96d" data-element_type="widget" data-e-type="widget"
										data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Learn More</span>
											</span>
										</a>
									</div>
									<div class="elementor-element elementor-element-95de8ce elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
										data-id="95de8ce" data-element_type="widget" data-e-type="widget"
										data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
										data-widget_type="image.default">
										<img loading="lazy" decoding="async" width="1920" height="1280"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-tending-to-plants-in-a-lush-garden-during-2025-07-08-16-32-36-utc.webp"
											class="attachment-full size-full wp-image-249" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-tending-to-plants-in-a-lush-garden-during-2025-07-08-16-32-36-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-tending-to-plants-in-a-lush-garden-during-2025-07-08-16-32-36-utc-300x200.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-tending-to-plants-in-a-lush-garden-during-2025-07-08-16-32-36-utc-1024x683.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-tending-to-plants-in-a-lush-garden-during-2025-07-08-16-32-36-utc-768x512.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-tending-to-plants-in-a-lush-garden-during-2025-07-08-16-32-36-utc-1536x1024.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-tending-to-plants-in-a-lush-garden-during-2025-07-08-16-32-36-utc-800x533.webp 800w"
											sizes="(max-width: 1920px) 100vw, 1920px">
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-0725371 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="0725371" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-22c33fb elementor-widget elementor-widget-image-box"
									data-id="22c33fb" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<h4 class="elementor-image-box-title">Outdoor Cleaning &amp; Hardscape Care
											</h4>
											<p class="elementor-image-box-description">Cleaning pathways, patios, stone
												areas, and outdoor structures to maintain a polished, welcoming look
												across your entire landscape.</p>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-e935549 e-con-full e-flex e-con e-child"
									data-id="e935549" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-c824ec1 elementor-widget elementor-widget-button"
										data-id="c824ec1" data-element_type="widget" data-e-type="widget"
										data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Learn More</span>
											</span>
										</a>
									</div>
									<div class="elementor-element elementor-element-855a52d elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
										data-id="855a52d" data-element_type="widget" data-e-type="widget"
										data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
										data-widget_type="image.default">
										<img fetchpriority="high" decoding="async" width="1920" height="1280"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc.webp"
											class="attachment-full size-full wp-image-80" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-300x200.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-1024x683.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-768x512.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-1536x1024.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/professional-gardener-trimming-garden-decorative-t-2025-03-15-00-55-17-utc-800x533.webp 800w"
											sizes="(max-width: 1920px) 100vw, 1920px">
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-ab346f1 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="ab346f1" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;250&quot;}">
								<div class="elementor-element elementor-element-13ab702 elementor-widget elementor-widget-image-box"
									data-id="13ab702" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<h4 class="elementor-image-box-title">Irrigation System Setup</h4>
											<p class="elementor-image-box-description">Smart, water-efficient irrigation
												solutions that ensure your plants receive the right amount of hydration,
												saving time and reducing water waste.</p>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-e5ff1cf e-con-full e-flex e-con e-child"
									data-id="e5ff1cf" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-c0351b9 elementor-widget elementor-widget-button"
										data-id="c0351b9" data-element_type="widget" data-e-type="widget"
										data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Learn More</span>
											</span>
										</a>
									</div>
									<div class="elementor-element elementor-element-91fa6c8 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
										data-id="91fa6c8" data-element_type="widget" data-e-type="widget"
										data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
										data-widget_type="image.default">
										<img loading="lazy" decoding="async" width="1920" height="1280"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/power-washing-garden-paths-2025-03-13-02-47-53-utc.webp"
											class="attachment-full size-full wp-image-250" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/power-washing-garden-paths-2025-03-13-02-47-53-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/power-washing-garden-paths-2025-03-13-02-47-53-utc-300x200.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/power-washing-garden-paths-2025-03-13-02-47-53-utc-1024x683.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/power-washing-garden-paths-2025-03-13-02-47-53-utc-768x512.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/power-washing-garden-paths-2025-03-13-02-47-53-utc-1536x1024.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/power-washing-garden-paths-2025-03-13-02-47-53-utc-800x533.webp 800w"
											sizes="(max-width: 1920px) 100vw, 1920px">
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-5612e6e e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="5612e6e" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;500&quot;}">
								<div class="elementor-element elementor-element-b06f072 elementor-widget elementor-widget-image-box"
									data-id="b06f072" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<h4 class="elementor-image-box-title">Tree &amp; Shrub Care</h4>
											<p class="elementor-image-box-description">Expert pruning, shaping, pest
												management, and health monitoring for trees and shrubs to support
												long-term growth and safety.</p>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-5744ea0 e-con-full e-flex e-con e-child"
									data-id="5744ea0" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-063e4c4 elementor-widget elementor-widget-button"
										data-id="063e4c4" data-element_type="widget" data-e-type="widget"
										data-widget_type="button.default">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Learn More</span>
											</span>
										</a>
									</div>
									<div class="elementor-element elementor-element-f005318 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
										data-id="f005318" data-element_type="widget" data-e-type="widget"
										data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
										data-widget_type="image.default">
										<img loading="lazy" decoding="async" width="1920" height="1230"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-laying-new-sod-in-residential-backyard-du-2025-05-31-22-39-14-utc.webp"
											class="attachment-full size-full wp-image-248" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-laying-new-sod-in-residential-backyard-du-2025-05-31-22-39-14-utc.webp 1920w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-laying-new-sod-in-residential-backyard-du-2025-05-31-22-39-14-utc-300x192.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-laying-new-sod-in-residential-backyard-du-2025-05-31-22-39-14-utc-1024x656.webp 1024w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-laying-new-sod-in-residential-backyard-du-2025-05-31-22-39-14-utc-768x492.webp 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-laying-new-sod-in-residential-backyard-du-2025-05-31-22-39-14-utc-1536x984.webp 1536w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/gardener-laying-new-sod-in-residential-backyard-du-2025-05-31-22-39-14-utc-800x513.webp 800w"
											sizes="(max-width: 1920px) 100vw, 1920px">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-3259417 e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="3259417" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-840fc5b e-con-full e-flex e-con e-child"
							data-id="840fc5b" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-a219aa9 elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="a219aa9" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">Why Choose Us</div>
							</div>
							<div class="elementor-element elementor-element-92c8df1 elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="92c8df1" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<h2 class="elementor-heading-title elementor-size-default">Gardens That Thrive, Not Just
									Survive</h2>
							</div>
							<div class="elementor-element elementor-element-555780f elementor-widget elementor-widget-text-editor animated fadeInUp"
								data-id="555780f" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="text-editor.default">
								<p>Our combination of experience, care, and sustainable methods ensures your garden
									stays vibrant year-round.</p>
							</div>
						</div>
						<div class="elementor-element elementor-element-316cf66 e-con-full e-flex e-con e-child"
							data-id="316cf66" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-c66addd e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="c66addd" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-c13119b elementor-position-inline-start elementor-widget__width-initial elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
									data-id="c13119b" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon-box.default">
									<div class="elementor-icon-box-wrapper">

										<div class="elementor-icon-box-icon">
											<span class="elementor-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-medal"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M223.75 130.75L154.62 15.54A31.997 31.997 0 0 0 127.18 0H16.03C3.08 0-4.5 14.57 2.92 25.18l111.27 158.96c29.72-27.77 67.52-46.83 109.56-53.39zM495.97 0H384.82c-11.24 0-21.66 5.9-27.44 15.54l-69.13 115.21c42.04 6.56 79.84 25.62 109.56 53.38L509.08 25.18C516.5 14.57 508.92 0 495.97 0zM256 160c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm92.52 157.26l-37.93 36.96 8.97 52.22c1.6 9.36-8.26 16.51-16.65 12.09L256 393.88l-46.9 24.65c-8.4 4.45-18.25-2.74-16.65-12.09l8.97-52.22-37.93-36.96c-6.82-6.64-3.05-18.23 6.35-19.59l52.43-7.64 23.43-47.52c2.11-4.28 6.19-6.39 10.28-6.39 4.11 0 8.22 2.14 10.33 6.39l23.43 47.52 52.43 7.64c9.4 1.36 13.17 12.95 6.35 19.59z">
													</path>
												</svg> </span>
										</div>

										<div class="elementor-icon-box-content">

											<h4 class="elementor-icon-box-title">
												<span>
													Expert-Driven Results </span>
											</h4>


										</div>

									</div>
								</div>
								<div class="elementor-element elementor-element-eea8ab5 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
									data-id="eea8ab5" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>Skilled horticulturists and landscape specialists ensure your garden is planned
										and maintained with precision and care.</p>
								</div>
								<div class="elementor-element elementor-element-18c6868 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
									data-id="18c6868" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon.default">
									<div class="elementor-icon-wrapper">
										<a class="elementor-icon" href="#">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right"
												viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
												</path>
											</svg> </a>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-991c172 elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
								data-id="991c172" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="divider.default">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
							<div class="elementor-element elementor-element-52cbf35 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="52cbf35" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-c72e879 elementor-position-inline-start elementor-widget__width-initial elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
									data-id="c72e879" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon-box.default">
									<div class="elementor-icon-box-wrapper">

										<div class="elementor-icon-box-icon">
											<span class="elementor-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-recycle"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M184.561 261.903c3.232 13.997-12.123 24.635-24.068 17.168l-40.736-25.455-50.867 81.402C55.606 356.273 70.96 384 96.012 384H148c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12H96.115c-75.334 0-121.302-83.048-81.408-146.88l50.822-81.388-40.725-25.448c-12.081-7.547-8.966-25.961 4.879-29.158l110.237-25.45c8.611-1.988 17.201 3.381 19.189 11.99l25.452 110.237zm98.561-182.915l41.289 66.076-40.74 25.457c-12.051 7.528-9 25.953 4.879 29.158l110.237 25.45c8.672 1.999 17.215-3.438 19.189-11.99l25.45-110.237c3.197-13.844-11.99-24.719-24.068-17.168l-40.687 25.424-41.263-66.082c-37.521-60.033-125.209-60.171-162.816 0l-17.963 28.766c-3.51 5.62-1.8 13.021 3.82 16.533l33.919 21.195c5.62 3.512 13.024 1.803 16.536-3.817l17.961-28.743c12.712-20.341 41.973-19.676 54.257-.022zM497.288 301.12l-27.515-44.065c-3.511-5.623-10.916-7.334-16.538-3.821l-33.861 21.159c-5.62 3.512-7.33 10.915-3.818 16.536l27.564 44.112c13.257 21.211-2.057 48.96-27.136 48.96H320V336.02c0-14.213-17.242-21.383-27.313-11.313l-80 79.981c-6.249 6.248-6.249 16.379 0 22.627l80 79.989C302.689 517.308 320 510.3 320 495.989V448h95.88c75.274 0 121.335-82.997 81.408-146.88z">
													</path>
												</svg> </span>
										</div>

										<div class="elementor-icon-box-content">

											<h4 class="elementor-icon-box-title">
												<span>
													Sustainable &amp; Eco-Friendly Methods </span>
											</h4>


										</div>

									</div>
								</div>
								<div class="elementor-element elementor-element-06dc923 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
									data-id="06dc923" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>We use safe fertilizers, smart irrigation, and low-waste practices to keep your
										garden healthy and the environment protected.</p>
								</div>
								<div class="elementor-element elementor-element-4b2cdc2 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
									data-id="4b2cdc2" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon.default">
									<div class="elementor-icon-wrapper">
										<a class="elementor-icon" href="#">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right"
												viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
												</path>
											</svg> </a>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-d518cee elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
								data-id="d518cee" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="divider.default">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
							<div class="elementor-element elementor-element-fcf2e5a e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="fcf2e5a" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-26ce58e elementor-position-inline-start elementor-widget__width-initial elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
									data-id="26ce58e" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon-box.default">
									<div class="elementor-icon-box-wrapper">

										<div class="elementor-icon-box-icon">
											<span class="elementor-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-calendar-check"
													viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M436 160H12c-6.627 0-12-5.373-12-12v-36c0-26.51 21.49-48 48-48h48V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h128V12c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v52h48c26.51 0 48 21.49 48 48v36c0 6.627-5.373 12-12 12zM12 192h424c6.627 0 12 5.373 12 12v260c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V204c0-6.627 5.373-12 12-12zm333.296 95.947l-28.169-28.398c-4.667-4.705-12.265-4.736-16.97-.068L194.12 364.665l-45.98-46.352c-4.667-4.705-12.266-4.736-16.971-.068l-28.397 28.17c-4.705 4.667-4.736 12.265-.068 16.97l82.601 83.269c4.667 4.705 12.265 4.736 16.97.068l142.953-141.805c4.705-4.667 4.736-12.265.068-16.97z">
													</path>
												</svg> </span>
										</div>

										<div class="elementor-icon-box-content">

											<h4 class="elementor-icon-box-title">
												<span>
													Reliable, Consistent Maintenance </span>
											</h4>


										</div>

									</div>
								</div>
								<div class="elementor-element elementor-element-5d67b46 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
									data-id="5d67b46" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>Weekly or monthly care that keeps your outdoor space neat, balanced, and thriving
										— without you lifting a finger.</p>
								</div>
								<div class="elementor-element elementor-element-c3331cd elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
									data-id="c3331cd" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon.default">
									<div class="elementor-icon-wrapper">
										<a class="elementor-icon" href="#">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right"
												viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
												</path>
											</svg> </a>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-c482174 elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
								data-id="c482174" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="divider.default">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
							<div class="elementor-element elementor-element-ca269cc e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="ca269cc" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-9936bd8 elementor-position-inline-start elementor-widget__width-initial elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
									data-id="9936bd8" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon-box.default">
									<div class="elementor-icon-box-wrapper">

										<div class="elementor-icon-box-icon">
											<span class="elementor-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-expand-arrows-alt"
													viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M448 344v112a23.94 23.94 0 0 1-24 24H312c-21.39 0-32.09-25.9-17-41l36.2-36.2L224 295.6 116.77 402.9 153 439c15.09 15.1 4.39 41-17 41H24a23.94 23.94 0 0 1-24-24V344c0-21.4 25.89-32.1 41-17l36.19 36.2L184.46 256 77.18 148.7 41 185c-15.1 15.1-41 4.4-41-17V56a23.94 23.94 0 0 1 24-24h112c21.39 0 32.09 25.9 17 41l-36.2 36.2L224 216.4l107.23-107.3L295 73c-15.09-15.1-4.39-41 17-41h112a23.94 23.94 0 0 1 24 24v112c0 21.4-25.89 32.1-41 17l-36.19-36.2L263.54 256l107.28 107.3L407 327.1c15.1-15.2 41-4.5 41 16.9z">
													</path>
												</svg> </span>
										</div>

										<div class="elementor-icon-box-content">

											<h4 class="elementor-icon-box-title">
												<span>
													Tailored to Your Space &amp; Style </span>
											</h4>


										</div>

									</div>
								</div>
								<div class="elementor-element elementor-element-3584d51 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
									data-id="3584d51" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>Every garden is unique. We customize plant choices, layouts, and maintenance
										plans based on your landscape and lifestyle.</p>
								</div>
								<div class="elementor-element elementor-element-f2d01c3 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
									data-id="f2d01c3" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon.default">
									<div class="elementor-icon-wrapper">
										<a class="elementor-icon" href="#">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right"
												viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
												</path>
											</svg> </a>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-167b2ee elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
								data-id="167b2ee" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="divider.default">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
							<div class="elementor-element elementor-element-97c2845 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="97c2845" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-e23ea58 elementor-position-inline-start elementor-widget__width-initial elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
									data-id="e23ea58" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon-box.default">
									<div class="elementor-icon-box-wrapper">

										<div class="elementor-icon-box-icon">
											<span class="elementor-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marked-alt"
													viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z">
													</path>
												</svg> </span>
										</div>

										<div class="elementor-icon-box-content">

											<h4 class="elementor-icon-box-title">
												<span>
													Local Expertise </span>
											</h4>


										</div>

									</div>
								</div>
								<div class="elementor-element elementor-element-5fff0b4 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
									data-id="5fff0b4" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>We understand local climate, soil types, and plant behavior, giving your garden
										exactly what it needs.</p>
								</div>
								<div class="elementor-element elementor-element-b6f30d8 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-icon"
									data-id="b6f30d8" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon.default">
									<div class="elementor-icon-wrapper">
										<a class="elementor-icon" href="#">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-right"
												viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
												</path>
											</svg> </a>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-cb7a26c elementor-widget elementor-widget-button animated fadeInUp"
							data-id="cb7a26c" data-element_type="widget" data-e-type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
							data-widget_type="button.default">
							<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
								<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">See All Benefits</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-43cd6f8 e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="43cd6f8" data-element_type="container" data-e-type="container"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-1b3a489 e-con-full e-flex e-con e-child"
							data-id="1b3a489" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-b23a820 elementor-widget__width-inherit elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="b23a820" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">Recent Project</div>
							</div>
							<div class="elementor-element elementor-element-49b4ccc elementor-widget__width-initial elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="49b4ccc" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<h2 class="elementor-heading-title elementor-size-default">A Collection of Gardens We've
									Designed</h2>
							</div>
							<div class="elementor-element elementor-element-4abd11a elementor-widget__width-initial elementor-widget elementor-widget-text-editor animated fadeInUp"
								data-id="4abd11a" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="text-editor.default">
								<p>Each project reflects our commitment to detail, quality, and creating spaces that
									feel welcoming and alive.</p>
							</div>
							<div class="elementor-element elementor-element-2debc2c elementor-widget elementor-widget-button animated fadeInUp"
								data-id="2debc2c" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">See All Projects</span>
									</span>
								</a>
							</div>
						</div>
						<div class="elementor-element elementor-element-2753c37 e-con-full e-grid e-con e-child"
							data-id="2753c37" data-element_type="container" data-e-type="container">
							<a class="elementor-element elementor-element-75b7a0f e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="75b7a0f" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}" href="#">
								<div class="elementor-element elementor-element-6b0b1bc e-con-full e-flex e-con e-child"
									data-id="6b0b1bc" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-dc9b6f3 elementor-widget elementor-widget-heading"
										data-id="dc9b6f3" data-element_type="widget" data-e-type="widget"
										data-widget_type="heading.default">
										<div class="elementor-heading-title elementor-size-default">Commercial</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-4f2f6bd elementor-widget elementor-widget-image-box"
									data-id="4f2f6bd" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<div class="elementor-image-box-title">Commercial Landscape Redesign</div>
											<p class="elementor-image-box-description">Melbourne, Australia</p>
										</div>
									</div>
								</div>
							</a>
							<a class="elementor-element elementor-element-72e9e6c e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="72e9e6c" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;250&quot;}"
								href="#">
								<div class="elementor-element elementor-element-143ddb8 e-con-full e-flex e-con e-child"
									data-id="143ddb8" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-e522fb7 elementor-widget elementor-widget-heading"
										data-id="e522fb7" data-element_type="widget" data-e-type="widget"
										data-widget_type="heading.default">
										<div class="elementor-heading-title elementor-size-default">Residential</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-c54c7fe elementor-widget elementor-widget-image-box"
									data-id="c54c7fe" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<div class="elementor-image-box-title">Tropical Home Garden Revitalization
											</div>
											<p class="elementor-image-box-description">Bali, Indonesia</p>
										</div>
									</div>
								</div>
							</a>
							<a class="elementor-element elementor-element-32d84b5 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="32d84b5" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;500&quot;}"
								href="#">
								<div class="elementor-element elementor-element-68b5aa1 e-con-full e-flex e-con e-child"
									data-id="68b5aa1" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-e6a1e8e elementor-widget elementor-widget-heading"
										data-id="e6a1e8e" data-element_type="widget" data-e-type="widget"
										data-widget_type="heading.default">
										<div class="elementor-heading-title elementor-size-default">Residential</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-6f0cd9f elementor-widget elementor-widget-image-box"
									data-id="6f0cd9f" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<div class="elementor-image-box-title">Backyard Courtyard Redesign</div>
											<p class="elementor-image-box-description">Sydney, Australia</p>
										</div>
									</div>
								</div>
							</a>
							<a class="elementor-element elementor-element-be72776 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="be72776" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;750&quot;}"
								href="#">
								<div class="elementor-element elementor-element-b4859c5 e-con-full e-flex e-con e-child"
									data-id="b4859c5" data-element_type="container" data-e-type="container"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-element elementor-element-8b8d1b2 elementor-widget elementor-widget-heading"
										data-id="8b8d1b2" data-element_type="widget" data-e-type="widget"
										data-widget_type="heading.default">
										<div class="elementor-heading-title elementor-size-default">Commercial</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-cf95944 elementor-widget elementor-widget-image-box"
									data-id="cf95944" data-element_type="widget" data-e-type="widget"
									data-widget_type="image-box.default">
									<div class="elementor-image-box-wrapper">
										<div class="elementor-image-box-content">
											<div class="elementor-image-box-title">Front Yard Makeover For Family Home
											</div>
											<p class="elementor-image-box-description">Brisbane, Australia</p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-a67a212 e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="a67a212" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-472469a e-con-full e-flex e-con e-child"
							data-id="472469a" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-a8f6d39 elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="a8f6d39" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">What People Say</div>
							</div>
							<div class="elementor-element elementor-element-912a58d elementor-widget__width-initial elementor-widget elementor-widget-heading animated fadeInUp"
								data-id="912a58d" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="heading.default">
								<h2 class="elementor-heading-title elementor-size-default">Happy Clients, Beautiful
									Landscapes</h2>
							</div>
							<div class="elementor-element elementor-element-3b8366e elementor-widget elementor-widget-text-editor animated fadeInUp"
								data-id="3b8366e" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="text-editor.default">
								<p>From small backyard upgrades to full-scale landscapes, our clients see the difference
									in quality and care.</p>
							</div>
						</div>
						<div class="elementor-element elementor-element-37eb41e e-con-full e-flex e-con e-child"
							data-id="37eb41e" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-2288ab3 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="2288ab3" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-3552fc1 elementor-view-default elementor-widget elementor-widget-icon"
									data-id="3552fc1" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon.default">
									<div class="elementor-icon-wrapper">
										<div class="elementor-icon">
											<svg class="ekit-svg-icon icon-quote1" viewBox="0 0 32 32"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M7.426 15.221v2.576h6.435v13.861h-13.861v-13.861h0v-2.576c0-5.231 1.505-9.115 4.473-11.545 2.053-1.681 4.653-2.533 7.725-2.533v7.425c-1.668 0-4.773 0-4.773 6.653zM30.338 8.568v-7.425c-3.073 0-5.672 0.852-7.725 2.533-2.968 2.43-4.473 6.314-4.473 11.545v16.437h13.861v-13.861h-6.435v-2.576c0-6.653 3.105-6.653 4.773-6.653z">
												</path>
											</svg>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-ea43745 elementor-widget elementor-widget-text-editor"
									data-id="ea43745" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>“We’ve worked with several gardening services in the past, but nothing compares
										to the experience we had with this team. They took the time to understand how we
										use our backyard, suggested plants that matched our lifestyle, and redesigned
										everything with such care.”</p>
								</div>
								<div class="elementor-element elementor-element-f948cb4 e-con-full e-flex e-con e-child"
									data-id="f948cb4" data-element_type="container" data-e-type="container">
									<div class="elementor-element elementor-element-9dfc3b1 elementor-widget elementor-widget-image"
										data-id="9dfc3b1" data-element_type="widget" data-e-type="widget"
										data-widget_type="image.default">
										<img loading="lazy" decoding="async" width="600" height="600"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/Avatar-vladislav-nikonov-unsplash.webp"
											class="attachment-full size-full wp-image-265" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/Avatar-vladislav-nikonov-unsplash.webp 600w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/Avatar-vladislav-nikonov-unsplash-300x300.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/Avatar-vladislav-nikonov-unsplash-150x150.webp 150w"
											sizes="(max-width: 600px) 100vw, 600px">
									</div>
									<div class="elementor-element elementor-element-7d8d74e elementor-widget elementor-widget-elementskit-heading"
										data-id="7d8d74e" data-element_type="widget" data-e-type="widget"
										data-widget_type="elementskit-heading.default">
										<div class="ekit-wid-con">
											<div
												class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
												<div class="ekit-heading--title elementskit-section-title ">Tom M.,
													<span>Homeowner</span></div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-03e9aa3 elementor-widget elementor-widget-button"
									data-id="03e9aa3" data-element_type="widget" data-e-type="widget"
									data-widget_type="button.default">
									<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
										<span class="elementor-button-content-wrapper">
											<span class="elementor-button-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right"
													viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
													</path>
												</svg> </span>
											<span class="elementor-button-text">Read Customer Story</span>
										</span>
									</a>
								</div>
							</div>
							<div class="elementor-element elementor-element-94c81f2 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="94c81f2" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;250&quot;}">
								<div class="elementor-element elementor-element-5c966ad elementor-widget elementor-widget-elementskit-video"
									data-id="5c966ad" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;ekit_video_popup_close_icon&quot;:{&quot;value&quot;:&quot;icon icon-cancel&quot;,&quot;library&quot;:&quot;ekiticons&quot;}}"
									data-widget_type="elementskit-video.default">
									<div class="elementor-widget-container">
										<div class="ekit-wid-con">
											<div class="video-content" data-video-player="[]"
												data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;,&quot;popupIcon&quot;:{&quot;value&quot;:&quot;icon icon-cancel&quot;,&quot;library&quot;:&quot;ekiticons&quot;},&quot;videoStyle&quot;:&quot;popup&quot;,&quot;videoTypeName&quot;:&quot;youtube&quot;,&quot;autoplay&quot;:false,&quot;muted&quot;:false,&quot;loop&quot;:false,&quot;bg_color&quot;:&quot;&quot;}">
												<div class="ekit-hidden-icons" style="display: none;">
													<div class="ekit-popup-close-icon">
														<svg class="ekit-svg-icon icon-cancel" viewBox="0 0 32 32"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M18.556 16.027l12.169-12.169c0.706-0.706 0.706-1.85 0-2.555s-1.851-0.706-2.555 0l-12.169 12.169-12.167-12.169c-0.705-0.706-1.85-0.706-2.555 0s-0.706 1.85 0 2.555l12.167 12.169-12.915 12.915c-0.706 0.706-0.706 1.85 0 2.555 0.352 0.353 0.815 0.53 1.278 0.53s0.925-0.176 1.278-0.53l12.915-12.915 12.915 12.915c0.353 0.353 0.815 0.53 1.278 0.53s0.924-0.176 1.278-0.53c0.706-0.706 0.706-1.85 0-2.555l-12.915-12.915z">
															</path>
														</svg>
													</div>
												</div>

												<a class="ekit_icon_button ekit-video-popup ekit-video-popup-btn"
													href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end="
													aria-label="Play video">
													<svg class="ekit-svg-icon icon-play-button" viewBox="0 0 32 32"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M27.481 15.773l-22.096-15.238c-0.234-0.161-0.537-0.178-0.787-0.047-0.251 0.132-0.408 0.391-0.408 0.674v30.477c0 0.283 0.157 0.543 0.408 0.675 0.111 0.058 0.233 0.087 0.354 0.087 0.152 0 0.302-0.046 0.433-0.135l22.096-15.238c0.206-0.142 0.329-0.376 0.329-0.627s-0.123-0.485-0.329-0.627z">
														</path>
													</svg></a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-397328f elementor-widget elementor-widget-text-editor"
									data-id="397328f" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>“Reliable, professional, and easy to work with.”</p>
								</div>
								<div class="elementor-element elementor-element-5af54c0 elementor-widget elementor-widget-elementskit-heading"
									data-id="5af54c0" data-element_type="widget" data-e-type="widget"
									data-widget_type="elementskit-heading.default">
									<div class="ekit-wid-con">
										<div
											class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
											<div class="ekit-heading--title elementskit-section-title ">Mike T.,
												<span>Homeowner</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-fc81481 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="fc81481" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-537b8a5 elementor-widget elementor-widget-elementskit-video"
									data-id="537b8a5" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;ekit_video_popup_close_icon&quot;:{&quot;value&quot;:&quot;icon icon-cancel&quot;,&quot;library&quot;:&quot;ekiticons&quot;}}"
									data-widget_type="elementskit-video.default">
									<div class="elementor-widget-container">
										<div class="ekit-wid-con">
											<div class="video-content" data-video-player="[]"
												data-video-setting="{&quot;videoVolume&quot;:&quot;horizontal&quot;,&quot;startVolume&quot;:0.8,&quot;videoType&quot;:&quot;iframe&quot;,&quot;videoClass&quot;:&quot;mfp-fade&quot;,&quot;popupIcon&quot;:{&quot;value&quot;:&quot;icon icon-cancel&quot;,&quot;library&quot;:&quot;ekiticons&quot;},&quot;videoStyle&quot;:&quot;popup&quot;,&quot;videoTypeName&quot;:&quot;youtube&quot;,&quot;autoplay&quot;:false,&quot;muted&quot;:false,&quot;loop&quot;:false,&quot;bg_color&quot;:&quot;&quot;}">
												<div class="ekit-hidden-icons" style="display: none;">
													<div class="ekit-popup-close-icon">
														<svg class="ekit-svg-icon icon-cancel" viewBox="0 0 32 32"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M18.556 16.027l12.169-12.169c0.706-0.706 0.706-1.85 0-2.555s-1.851-0.706-2.555 0l-12.169 12.169-12.167-12.169c-0.705-0.706-1.85-0.706-2.555 0s-0.706 1.85 0 2.555l12.167 12.169-12.915 12.915c-0.706 0.706-0.706 1.85 0 2.555 0.352 0.353 0.815 0.53 1.278 0.53s0.925-0.176 1.278-0.53l12.915-12.915 12.915 12.915c0.353 0.353 0.815 0.53 1.278 0.53s0.924-0.176 1.278-0.53c0.706-0.706 0.706-1.85 0-2.555l-12.915-12.915z">
															</path>
														</svg>
													</div>
												</div>

												<a class="ekit_icon_button ekit-video-popup ekit-video-popup-btn"
													href="https://www.youtube.com/embed/VhBl3dHT5SY?feature=oembed?playlist=VhBl3dHT5SY&amp;mute=0&amp;autoplay=0&amp;loop=no&amp;controls=0&amp;start=0&amp;end="
													aria-label="Play video">
													<svg class="ekit-svg-icon icon-play-button" viewBox="0 0 32 32"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M27.481 15.773l-22.096-15.238c-0.234-0.161-0.537-0.178-0.787-0.047-0.251 0.132-0.408 0.391-0.408 0.674v30.477c0 0.283 0.157 0.543 0.408 0.675 0.111 0.058 0.233 0.087 0.354 0.087 0.152 0 0.302-0.046 0.433-0.135l22.096-15.238c0.206-0.142 0.329-0.376 0.329-0.627s-0.123-0.485-0.329-0.627z">
														</path>
													</svg></a>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-5fef0cd elementor-widget elementor-widget-text-editor"
									data-id="5fef0cd" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>“Their monthly maintenance service is truly stress-free”</p>
								</div>
								<div class="elementor-element elementor-element-0fa39e4 elementor-widget elementor-widget-elementskit-heading"
									data-id="0fa39e4" data-element_type="widget" data-e-type="widget"
									data-widget_type="elementskit-heading.default">
									<div class="ekit-wid-con">
										<div
											class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
											<div class="ekit-heading--title elementskit-section-title ">Daniel P.,
												<span>Homeowner</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-0013d36 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="0013d36" data-element_type="container" data-e-type="container"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;250&quot;}">
								<div class="elementor-element elementor-element-fa40805 elementor-view-default elementor-widget elementor-widget-icon"
									data-id="fa40805" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon.default">
									<div class="elementor-icon-wrapper">
										<div class="elementor-icon">
											<svg class="ekit-svg-icon icon-quote1" viewBox="0 0 32 32"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M7.426 15.221v2.576h6.435v13.861h-13.861v-13.861h0v-2.576c0-5.231 1.505-9.115 4.473-11.545 2.053-1.681 4.653-2.533 7.725-2.533v7.425c-1.668 0-4.773 0-4.773 6.653zM30.338 8.568v-7.425c-3.073 0-5.672 0.852-7.725 2.533-2.968 2.43-4.473 6.314-4.473 11.545v16.437h13.861v-13.861h-6.435v-2.576c0-6.653 3.105-6.653 4.773-6.653z">
												</path>
											</svg>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-1e69837 elementor-widget elementor-widget-text-editor"
									data-id="1e69837" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>“Our café courtyard used to feel dull and uneven, and we weren’t sure how to
										improve it. The team came in with a clear plan, offered creative ideas, and
										handled everything with reliable communication and consistency.”</p>
								</div>
								<div class="elementor-element elementor-element-3341a9c e-con-full e-flex e-con e-child"
									data-id="3341a9c" data-element_type="container" data-e-type="container">
									<div class="elementor-element elementor-element-17a9f80 elementor-widget elementor-widget-image"
										data-id="17a9f80" data-element_type="widget" data-e-type="widget"
										data-widget_type="image.default">
										<img loading="lazy" decoding="async" width="600" height="600"
											src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/taylor-Xqb7GmV_VoQ-unsplash.webp"
											class="attachment-full size-full wp-image-266" alt=""
											srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/taylor-Xqb7GmV_VoQ-unsplash.webp 600w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/taylor-Xqb7GmV_VoQ-unsplash-300x300.webp 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/taylor-Xqb7GmV_VoQ-unsplash-150x150.webp 150w"
											sizes="(max-width: 600px) 100vw, 600px">
									</div>
									<div class="elementor-element elementor-element-226e0d8 elementor-widget elementor-widget-elementskit-heading"
										data-id="226e0d8" data-element_type="widget" data-e-type="widget"
										data-widget_type="elementskit-heading.default">
										<div class="ekit-wid-con">
											<div
												class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
												<div class="ekit-heading--title elementskit-section-title ">Michael R.,
													<span>Café Owner</span></div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-f9ea402 elementor-widget elementor-widget-button"
									data-id="f9ea402" data-element_type="widget" data-e-type="widget"
									data-widget_type="button.default">
									<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
										<span class="elementor-button-content-wrapper">
											<span class="elementor-button-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right"
													viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
													</path>
												</svg> </span>
											<span class="elementor-button-text">Read Customer Story</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-f18b96e e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="f18b96e" data-element_type="container" data-e-type="container"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-f88b575 e-con-full e-flex e-con e-child"
							data-id="f88b575" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-890d673 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="890d673" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
								<div class="elementor-element elementor-element-4ae62cd elementor-widget elementor-widget-counter"
									data-id="4ae62cd" data-element_type="widget" data-e-type="widget"
									data-widget_type="counter.default">
									<div class="elementor-counter">
										<div class="elementor-counter-number-wrapper">
											<span class="elementor-counter-number-prefix"></span>
											<span class="elementor-counter-number" data-duration="2000"
												data-to-value="85" data-from-value="0" data-delimiter=",">85</span>
											<span class="elementor-counter-number-suffix">%</span>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-edcb1df elementor-widget elementor-widget-text-editor"
									data-id="edcb1df" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>Healthier plant growth with guided care</p>
								</div>
							</div>
							<div class="elementor-element elementor-element-32dfef7 elementor-view-default elementor-widget elementor-widget-icon animated fadeInUp"
								data-id="32dfef7" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
								data-widget_type="icon.default">
								<div class="elementor-icon-wrapper">
									<div class="elementor-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-asterisk"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M478.21 334.093L336 256l142.21-78.093c11.795-6.477 15.961-21.384 9.232-33.037l-19.48-33.741c-6.728-11.653-21.72-15.499-33.227-8.523L296 186.718l3.475-162.204C299.763 11.061 288.937 0 275.48 0h-38.96c-13.456 0-24.283 11.061-23.994 24.514L216 186.718 77.265 102.607c-11.506-6.976-26.499-3.13-33.227 8.523l-19.48 33.741c-6.728 11.653-2.562 26.56 9.233 33.037L176 256 33.79 334.093c-11.795 6.477-15.961 21.384-9.232 33.037l19.48 33.741c6.728 11.653 21.721 15.499 33.227 8.523L216 325.282l-3.475 162.204C212.237 500.939 223.064 512 236.52 512h38.961c13.456 0 24.283-11.061 23.995-24.514L296 325.282l138.735 84.111c11.506 6.976 26.499 3.13 33.227-8.523l19.48-33.741c6.728-11.653 2.563-26.559-9.232-33.036z">
											</path>
										</svg>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-753b0d4 e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="753b0d4" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;500&quot;}">
								<div class="elementor-element elementor-element-669c85b elementor-widget elementor-widget-counter"
									data-id="669c85b" data-element_type="widget" data-e-type="widget"
									data-widget_type="counter.default">
									<div class="elementor-counter">
										<div class="elementor-counter-number-wrapper">
											<span class="elementor-counter-number-prefix"></span>
											<span class="elementor-counter-number" data-duration="2000"
												data-to-value="3" data-from-value="0" data-delimiter=",">3</span>
											<span class="elementor-counter-number-suffix">x</span>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-d50fedc elementor-widget elementor-widget-text-editor"
									data-id="d50fedc" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>Faster planning workflow</p>
								</div>
							</div>
							<div class="elementor-element elementor-element-4cc0d31 elementor-view-default elementor-widget elementor-widget-icon animated fadeInUp"
								data-id="4cc0d31" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;750&quot;}"
								data-widget_type="icon.default">
								<div class="elementor-icon-wrapper">
									<div class="elementor-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-asterisk"
											viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M478.21 334.093L336 256l142.21-78.093c11.795-6.477 15.961-21.384 9.232-33.037l-19.48-33.741c-6.728-11.653-21.72-15.499-33.227-8.523L296 186.718l3.475-162.204C299.763 11.061 288.937 0 275.48 0h-38.96c-13.456 0-24.283 11.061-23.994 24.514L216 186.718 77.265 102.607c-11.506-6.976-26.499-3.13-33.227 8.523l-19.48 33.741c-6.728 11.653-2.562 26.56 9.233 33.037L176 256 33.79 334.093c-11.795 6.477-15.961 21.384-9.232 33.037l19.48 33.741c6.728 11.653 21.721 15.499 33.227 8.523L216 325.282l-3.475 162.204C212.237 500.939 223.064 512 236.52 512h38.961c13.456 0 24.283-11.061 23.995-24.514L296 325.282l138.735 84.111c11.506 6.976 26.499 3.13 33.227-8.523l19.48-33.741c6.728-11.653 2.563-26.559-9.232-33.036z">
											</path>
										</svg>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-4349ced e-con-full e-flex e-con e-child animated fadeInUp"
								data-id="4349ced" data-element_type="container" data-e-type="container"
								data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;1000&quot;}">
								<div class="elementor-element elementor-element-9e9de4f elementor-widget elementor-widget-counter"
									data-id="9e9de4f" data-element_type="widget" data-e-type="widget"
									data-widget_type="counter.default">
									<div class="elementor-counter">
										<div class="elementor-counter-number-wrapper">
											<span class="elementor-counter-number-prefix"></span>
											<span class="elementor-counter-number" data-duration="2000"
												data-to-value="92" data-from-value="0" data-delimiter=",">92</span>
											<span class="elementor-counter-number-suffix">%</span>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-c17596b elementor-widget elementor-widget-text-editor"
									data-id="c17596b" data-element_type="widget" data-e-type="widget"
									data-widget_type="text-editor.default">
									<p>Users feel more confident in their garden decisions</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-05973b4 e-flex e-con-boxed e-con e-parent e-lazyloaded"
					data-id="05973b4" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
						<div class="elementor-element elementor-element-ff7c58a e-con-full e-flex e-con e-child animated fadeInUp"
							data-id="ff7c58a" data-element_type="container" data-e-type="container"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
							<div class="elementor-element elementor-element-a842320 elementor-widget elementor-widget-heading"
								data-id="a842320" data-element_type="widget" data-e-type="widget"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">Work With Us</div>
							</div>
							<div class="elementor-element elementor-element-2ef5be1 elementor-widget__width-initial elementor-widget elementor-widget-heading"
								data-id="2ef5be1" data-element_type="widget" data-e-type="widget"
								data-widget_type="heading.default">
								<h3 class="elementor-heading-title elementor-size-default">Start Your Garden
									Transformation with Us</h3>
							</div>
							<div class="elementor-element elementor-element-62cd4ac elementor-widget elementor-widget-heading"
								data-id="62cd4ac" data-element_type="widget" data-e-type="widget"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">You will get:</div>
							</div>
							<div class="elementor-element elementor-element-ff7a6d9 e-grid e-con-full e-con e-child"
								data-id="ff7a6d9" data-element_type="container" data-e-type="container">
								<div class="elementor-element elementor-element-c2fc7bb elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
									data-id="c2fc7bb" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon-list.default">
									<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
													</path>
												</svg> </span>
											<span class="elementor-icon-list-text">Cleaner, Healthier Gardens</span>
										</li>
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
													</path>
												</svg> </span>
											<span class="elementor-icon-list-text">Expert Outdoor Guidance</span>
										</li>
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
													</path>
												</svg> </span>
											<span class="elementor-icon-list-text">Boost Property Value</span>
										</li>
									</ul>
								</div>
								<div class="elementor-element elementor-element-2b701d4 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
									data-id="2b701d4" data-element_type="widget" data-e-type="widget"
									data-widget_type="icon-list.default">
									<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
													</path>
												</svg> </span>
											<span class="elementor-icon-list-text">Certified Garden Specialist</span>
										</li>
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
													</path>
												</svg> </span>
											<span class="elementor-icon-list-text">Visible Instant Results</span>
										</li>
										<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle"
													viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
													</path>
												</svg> </span>
											<span class="elementor-icon-list-text">Personalized Garden Plans</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="elementor-element elementor-element-bdc1e06 elementor-widget elementor-widget-button"
								data-id="bdc1e06" data-element_type="widget" data-e-type="widget"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Work With Us</span>
									</span>
								</a>
							</div>
							<div class="elementor-element elementor-element-5d383aa elementor-absolute elementor-widget elementor-widget-image"
								data-id="5d383aa" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="image.default">
								<img loading="lazy" decoding="async" width="806" height="808"
									src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/terrace-logomark-2.png"
									class="attachment-full size-full wp-image-240" alt=""
									srcset="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/terrace-logomark-2.png 806w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/terrace-logomark-2-300x300.png 300w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/terrace-logomark-2-150x150.png 150w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/terrace-logomark-2-768x770.png 768w, {{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/terrace-logomark-2-800x802.png 800w"
									sizes="(max-width: 806px) 100vw, 806px">
							</div>
						</div>
						<div class="elementor-element elementor-element-f947f34 e-con-full e-flex e-con e-child animated fadeInUp"
							data-id="f947f34" data-element_type="container" data-e-type="container"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;250&quot;}">
							<div class="elementor-element elementor-element-95f2299 elementor-widget elementor-widget-heading"
								data-id="95f2299" data-element_type="widget" data-e-type="widget"
								data-widget_type="heading.default">
								<div class="elementor-heading-title elementor-size-default">Newsletter</div>
							</div>
							<div class="elementor-element elementor-element-7836c5d elementor-widget__width-initial elementor-widget elementor-widget-heading"
								data-id="7836c5d" data-element_type="widget" data-e-type="widget"
								data-widget_type="heading.default">
								<h3 class="elementor-heading-title elementor-size-default">Nurture Your Garden with Us
								</h3>
							</div>
							<div class="elementor-element elementor-element-83d7c5d elementor-widget elementor-widget-text-editor"
								data-id="83d7c5d" data-element_type="widget" data-e-type="widget"
								data-widget_type="text-editor.default">
								<p>Receive curated tips, inspiration, and the latest updates to help your outdoor space
									thrive all year long.</p>
							</div>
							<div class="elementor-element elementor-element-349f7da elementor-widget elementor-widget-button"
								data-id="349f7da" data-element_type="widget" data-e-type="widget"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Join Now</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>

	<div class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support">
		<div data-elementor-type="wp-post" data-elementor-id="59" class="elementor elementor-59">
			<div class="elementor-element elementor-element-e4ea2ee e-flex e-con-boxed e-con e-parent e-lazyloaded"
				data-id="e4ea2ee" data-element_type="container" data-e-type="container"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="e-con-inner">
					<div class="elementor-element elementor-element-71d32e9 e-con-full e-flex e-con e-child"
						data-id="71d32e9" data-element_type="container" data-e-type="container">
						<div class="elementor-element elementor-element-4c37da8 e-con-full e-flex e-con e-child"
							data-id="4c37da8" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-0a87d2e elementor-widget elementor-widget-image animated fadeInUp"
								data-id="0a87d2e" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="image.default">
								<img width="274" height="80"
									src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/uploads/sites/11/2026/01/seed-stone-logo.png"
									class="attachment-full size-full wp-image-52" alt="">
							</div>
							<div class="elementor-element elementor-element-037ab19 elementor-widget elementor-widget-text-editor animated fadeInUp"
								data-id="037ab19" data-element_type="widget" data-e-type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
								data-widget_type="text-editor.default">
								<p>Growing outdoor spaces that feel alive and inspiring.</p>
							</div>
							<div class="elementor-element elementor-element-d9c7ffe elementor-widget elementor-widget-button"
								data-id="d9c7ffe" data-element_type="widget" data-e-type="widget"
								data-widget_type="button.default">
								<a class="elementor-button elementor-button-link elementor-size-sm" href="#">
									<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">Back to Top</span>
									</span>
								</a>
							</div>
						</div>
						<div class="elementor-element elementor-element-0b2e8a3 e-grid e-con-full e-con e-child"
							data-id="0b2e8a3" data-element_type="container" data-e-type="container">
							<div class="elementor-element elementor-element-455502a e-con-full e-flex e-con e-child"
								data-id="455502a" data-element_type="container" data-e-type="container">
								<div class="elementor-element elementor-element-475e18d elementor-widget elementor-widget-heading animated fadeInUp"
									data-id="475e18d" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="heading.default">
									<div class="elementor-heading-title elementor-size-default">Services</div>
								</div>
								<div class="elementor-element elementor-element-991af9f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list animated fadeInUp"
									data-id="991af9f" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="icon-list.default">
									<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Garden Maintenance</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Landscape Design</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Irrigation Systems</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Lawn Care &amp; Turf</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Tree &amp; Shrub Care</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Outdoor Cleaning</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="elementor-element elementor-element-82c0e86 e-con-full e-flex e-con e-child"
								data-id="82c0e86" data-element_type="container" data-e-type="container">
								<div class="elementor-element elementor-element-d52d3c3 elementor-widget elementor-widget-heading animated fadeInUp"
									data-id="d52d3c3" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="heading.default">
									<div class="elementor-heading-title elementor-size-default">Company</div>
								</div>
								<div class="elementor-element elementor-element-54c6040 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list animated fadeInUp"
									data-id="54c6040" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="icon-list.default">
									<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">About Us</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Contact</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Career</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="elementor-element elementor-element-ba9bfe9 e-con-full e-flex e-con e-child"
								data-id="ba9bfe9" data-element_type="container" data-e-type="container">
								<div class="elementor-element elementor-element-6d6aca1 elementor-widget elementor-widget-heading animated fadeInUp"
									data-id="6d6aca1" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="heading.default">
									<div class="elementor-heading-title elementor-size-default">Resources</div>
								</div>
								<div class="elementor-element elementor-element-d15fa5b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list animated fadeInUp"
									data-id="d15fa5b" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="icon-list.default">
									<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Blog &amp; Tips</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">FAQs</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Pricing</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="elementor-element elementor-element-cb8d440 e-con-full e-flex e-con e-child"
								data-id="cb8d440" data-element_type="container" data-e-type="container">
								<div class="elementor-element elementor-element-5b56d42 elementor-widget elementor-widget-heading animated fadeInUp"
									data-id="5b56d42" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="heading.default">
									<div class="elementor-heading-title elementor-size-default">Follow Us On</div>
								</div>
								<div class="elementor-element elementor-element-9c6e8e0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list animated fadeInUp"
									data-id="9c6e8e0" data-element_type="widget" data-e-type="widget"
									data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
									data-widget_type="icon-list.default">
									<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">LinkedIn</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Instagram</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Tiktok</span>
											</a>
										</li>
										<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-text">Facebook</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-1dc93c9 e-con-full e-flex e-con e-child"
						data-id="1dc93c9" data-element_type="container" data-e-type="container">
						<div class="elementor-element elementor-element-bde5c4b elementor-widget__width-inherit elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp"
							data-id="bde5c4b" data-element_type="widget" data-e-type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
							data-widget_type="divider.default">
							<div class="elementor-divider">
								<span class="elementor-divider-separator">
								</span>
							</div>
						</div>
						<div class="elementor-element elementor-element-f3ad743 elementor-widget elementor-widget-text-editor animated fadeInUp"
							data-id="f3ad743" data-element_type="widget" data-e-type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;250&quot;}"
							data-widget_type="text-editor.default">
							© Terrace. Powered by <a href="https://kitpixel.com" target="_blank"
								rel="noopener">Kitpixel</a> </div>
						<div class="elementor-element elementor-element-0a6469a elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list animated fadeInUp"
							data-id="0a6469a" data-element_type="widget" data-e-type="widget"
							data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
							data-widget_type="icon-list.default">
							<ul class="elementor-icon-list-items elementor-inline-items">
								<li class="elementor-icon-list-item elementor-inline-item">
									<a href="#">

										<span class="elementor-icon-list-text">Terms of Service</span>
									</a>
								</li>
								<li class="elementor-icon-list-item elementor-inline-item">
									<a href="#">

										<span class="elementor-icon-list-text">Privacy Policy</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/terrace/*"},{"not":{"href_matches":["/terrace/wp-*.php","/terrace/wp-admin/*","/terrace/wp-content/uploads/sites/11/*","/terrace/wp-content/*","/terrace/wp-content/plugins/*","/terrace/wp-content/themes/hello-elementor/*","/terrace/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
	<script>
		(() => {
			const lazyloadRunObserver = () => {
				const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
				const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
					entries.forEach((entry) => {
						if (entry.isIntersecting) {
							let lazyloadBackground = entry.target;
							if (lazyloadBackground) {
								lazyloadBackground.classList.add('e-lazyloaded');
							}
							lazyloadBackgroundObserver.unobserve(entry.target);
						}
					});
				}, { rootMargin: '200px 0px 200px 0px' });
				lazyloadBackgrounds.forEach((lazyloadBackground) => {
					lazyloadBackgroundObserver.observe(lazyloadBackground);
				});
			};
			const events = [
				'DOMContentLoaded',
				'elementor/lazyload/observe',
			];
			events.forEach((event) => {
				document.addEventListener(event, lazyloadRunObserver);
			});
		})();
	</script>
	<link rel="stylesheet" id="e-animation-fadeInDown-css"
		href="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.css?ver=4.2.3"
		media="all">
	<script id="cute-alert-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alert.js?ver=4.2.0"></script>
	<script id="hello-theme-frontend-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/themes/hello-elementor/assets/js/hello-frontend.js?ver=3.5.1"></script>
	<script id="elementor-webpack-runtime-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=4.2.3"></script>
	<script id="elementor-frontend-modules-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=4.2.3"></script>
	<script id="jquery-ui-core-js-before">
		jQuery.uiBackCompat = true;
		//# sourceURL=jquery-ui-core-js-before
	</script>
	<script id="jquery-ui-core-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/jquery/ui/core.min.js?ver=1.14.2"></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnX": "Share on X", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } }, "hasCustomBreakpoints": false }, "version": "4.2.3", "is_static": false, "experimentalFeatures": { "e_font_icon_svg": true, "additional_custom_breakpoints": true, "container": true, "e_optimized_markup": true, "e_panel_promotions": true, "hello-theme-header-footer": true, "e_pro_free_trial_popup": true, "nested-elements": true, "global_classes_should_enforce_capabilities": true, "e_variables": true, "e_opt_in_v4_page": true, "e_components": true, "e_interactions": true, "e_widget_creation": true, "import-export-customization": true }, "urls": { "assets": "https:\/\/view.kitpixel.com\/terrace\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/view.kitpixel.com\/terrace\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/view.kitpixel.com\/terrace\/wp-content\/uploads\/sites\/11" }, "nonces": { "floatingButtonsClickTracking": "31385e62c7", "atomicFormsSendForm": "e63f7279f6" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "body_background_background": "classic", "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description", "hello_header_logo_type": "title", "hello_header_menu_layout": "horizontal", "hello_footer_logo_type": "logo" }, "post": { "id": 17, "title": "Home%20%E2%80%93%20Terrace", "excerpt": "", "featuredImage": "https:\/\/view.kitpixel.com\/terrace\/wp-content\/uploads\/sites\/11\/2026\/02\/01-home-162x1024.jpg" } };
		//# sourceURL=elementor-frontend-js-before
	</script>
	<script id="elementor-frontend-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=4.2.3"></script>
	<span id="elementor-device-mode" class="elementor-screen-only"></span>
	<script id="swiper-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5"></script>
	<script id="jquery-numerator-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1"></script>
	<script id="ekit-core-js-extra">
		var ekit_config = { "ajaxurl": "{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-admin/admin-ajax.php", "nonce": "fd31bca6c5" };
		//# sourceURL=ekit-core-js-extra
	</script>
	<script id="ekit-core-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widgets/core.js?ver=4.0.2"></script>
	<script id="ekit-video-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widgets/video.js?ver=4.0.2"></script>
	<script id="mediaelement-core-js-before">
		var mejsL10n = { "language": "en", "strings": { "mejs.download-file": "Download File", "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https://get.adobe.com/flashplayer/", "mejs.fullscreen": "Fullscreen", "mejs.play": "Play", "mejs.pause": "Pause", "mejs.time-slider": "Time Slider", "mejs.time-help-text": "Use Left/Right Arrow keys to advance one second, Up/Down arrows to advance ten seconds.", "mejs.live-broadcast": "Live Broadcast", "mejs.volume-help-text": "Use Up/Down Arrow keys to increase or decrease volume.", "mejs.unmute": "Unmute", "mejs.mute": "Mute", "mejs.volume-slider": "Volume Slider", "mejs.video-player": "Video Player", "mejs.audio-player": "Audio Player", "mejs.captions-subtitles": "Captions/Subtitles", "mejs.captions-chapters": "Chapters", "mejs.none": "None", "mejs.afrikaans": "Afrikaans", "mejs.albanian": "Albanian", "mejs.arabic": "Arabic", "mejs.belarusian": "Belarusian", "mejs.bulgarian": "Bulgarian", "mejs.catalan": "Catalan", "mejs.chinese": "Chinese", "mejs.chinese-simplified": "Chinese (Simplified)", "mejs.chinese-traditional": "Chinese (Traditional)", "mejs.croatian": "Croatian", "mejs.czech": "Czech", "mejs.danish": "Danish", "mejs.dutch": "Dutch", "mejs.english": "English", "mejs.estonian": "Estonian", "mejs.filipino": "Filipino", "mejs.finnish": "Finnish", "mejs.french": "French", "mejs.galician": "Galician", "mejs.german": "German", "mejs.greek": "Greek", "mejs.haitian-creole": "Haitian Creole", "mejs.hebrew": "Hebrew", "mejs.hindi": "Hindi", "mejs.hungarian": "Hungarian", "mejs.icelandic": "Icelandic", "mejs.indonesian": "Indonesian", "mejs.irish": "Irish", "mejs.italian": "Italian", "mejs.japanese": "Japanese", "mejs.korean": "Korean", "mejs.latvian": "Latvian", "mejs.lithuanian": "Lithuanian", "mejs.macedonian": "Macedonian", "mejs.malay": "Malay", "mejs.maltese": "Maltese", "mejs.norwegian": "Norwegian", "mejs.persian": "Persian", "mejs.polish": "Polish", "mejs.portuguese": "Portuguese", "mejs.romanian": "Romanian", "mejs.russian": "Russian", "mejs.serbian": "Serbian", "mejs.slovak": "Slovak", "mejs.slovenian": "Slovenian", "mejs.spanish": "Spanish", "mejs.swahili": "Swahili", "mejs.swedish": "Swedish", "mejs.tagalog": "Tagalog", "mejs.thai": "Thai", "mejs.turkish": "Turkish", "mejs.ukrainian": "Ukrainian", "mejs.vietnamese": "Vietnamese", "mejs.welsh": "Welsh", "mejs.yiddish": "Yiddish" } };
		//# sourceURL=mediaelement-core-js-before
	</script>
	<script id="mediaelement-core-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.17"></script>
	<script id="mediaelement-migrate-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=7.1.1"></script>
	<script id="mediaelement-js-extra">
		var _wpmejsSettings = { "pluginPath": "/terrace/wp-includes/js/mediaelement/", "classPrefix": "mejs-", "stretching": "responsive", "audioShortcodeLibrary": "mediaelement", "videoShortcodeLibrary": "mediaelement" };
		//# sourceURL=mediaelement-js-extra
	</script>
	<script id="wp-mediaelement-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=7.1.1"></script>
	<script id="magnific-popup-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/assets/libs/magnific-popup/jquery.magnific-popup.min.js?ver=4.0.2"></script>
	<script id="ekit-nav-menu-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widgets/nav-menu.js?ver=4.0.2"></script>
	<script id="ekit-menu-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/js/nav-menu.js?ver=4.0.2"></script>
	<script id="ekit-header-search-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widgets/header-search.js?ver=4.0.2"></script>
	<script id="ekit-header-offcanvas-js"
		src="{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widgets/header-offcanvas.js?ver=4.0.2"></script>
	<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"{{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/wp-emoji-release.min.js?ver=7.1.1"}}
</script>
	<script type="module">
		/*! This file is auto-generated */
		var e = "script#wp-emoji-settings", t = document.querySelector(e); if (!(t instanceof HTMLScriptElement)) throw new Error("Element missing: " + e); const r = JSON.parse(t.text), s = (window._wpemojiSettings = r, "wpEmojiSettingsSupports"), o = ["flag", "emoji"]; function i(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(s, JSON.stringify(t)) } catch (e) { } } function c(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data); e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0); const r = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data); return t.every((e, t) => e === r[t]) } function p(e, t) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var n = e.getImageData(16, 16, 1, 1); for (let e = 0; e < n.data.length; e++)if (0 !== n.data[e]) return !1; return !0 } function u(e, t, n, r) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !r(e, "\ud83e\u1fac8") }return !1 } function f(e, t, n, r) { let a; const s = (a = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : document.createElement("canvas")).getContext("2d", { willReadFrequently: !0 }), o = (s.textBaseline = "top", s.font = "600 32px Arial", {}); return e.forEach(e => { o[e] = t(s, e, n, r) }), o } function a(e) { var t = document.createElement("script"); t.src = e, t.defer = !0, document.head.appendChild(t) } r.supports = { everything: !0, everythingExceptFlag: !0 }, new Promise(t => { let n = function () { try { var e = JSON.parse(sessionStorage.getItem(s)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(o), u.toString(), c.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }); const a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = e => { i(n = e.data), a.terminate(), t(n) }) } catch (e) { } i(n = f(o, u, c, p)) } t(n) }).then(e => { for (const n in e) r.supports[n] = e[n], r.supports.everything = r.supports.everything && r.supports[n], "flag" !== n && (r.supports.everythingExceptFlag = r.supports.everythingExceptFlag && r.supports[n]); var t; r.supports.everythingExceptFlag = r.supports.everythingExceptFlag && !r.supports.flag, r.supports.everything || ((t = r.source || {}).concatemoji ? a(t.concatemoji) : t.wpemoji && t.twemoji && (a(t.twemoji), a(t.wpemoji))) });
		//# sourceURL={{ request()->getSchemeAndHttpHost() }}/seed-stone/wp-includes/js/wp-emoji-loader.min.js
	</script>



	<span
		style="border-radius: 10px !important; text-indent: 12px !important; width: auto !important; height: 20px !important; padding: 0px 8px !important; text-align: center !important; vertical-align: middle !important; font: bold 11px / 20px &quot;Helvetica Neue&quot;, Helvetica, sans-serif !important; color: rgb(255, 255, 255) !important; background: url(&quot;data:image/svg+xml;base64,PHN2ZyBpZD0ic291cmNlIiB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iNiIgY3k9IjYiIHI9IjYiIGZpbGw9IiNFNjAwMjMiPjwvY2lyY2xlPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTAgNkMwIDguNTYxNSAxLjYwNTUgMTAuNzQ4NSAzLjg2NSAxMS42MDlDMy44MSAxMS4xNDA1IDMuNzUxNSAxMC4zNjggMy44Nzc1IDkuODI2QzMuOTg2IDkuMzYgNC41NzggNi44NTcgNC41NzggNi44NTdDNC41NzggNi44NTcgNC4zOTk1IDYuNDk5NSA0LjM5OTUgNS45N0M0LjM5OTUgNS4xNCA0Ljg4MDUgNC41MiA1LjQ4IDQuNTJDNS45OSA0LjUyIDYuMjM2IDQuOTAyNSA2LjIzNiA1LjM2MUM2LjIzNiA1Ljg3MzUgNS45MDk1IDYuNjM5NSA1Ljc0MSA3LjM1QzUuNjAwNSA3Ljk0NDUgNi4wMzk1IDguNDI5NSA2LjYyNTUgOC40Mjk1QzcuNjg3IDguNDI5NSA4LjUwMzUgNy4zMSA4LjUwMzUgNS42OTRDOC41MDM1IDQuMjYzNSA3LjQ3NTUgMy4yNjQgNi4wMDggMy4yNjRDNC4zMDkgMy4yNjQgMy4zMTE1IDQuNTM4NSAzLjMxMTUgNS44NTZDMy4zMTE1IDYuMzY5NSAzLjUwOSA2LjkxOTUgMy43NTYgNy4yMTlDMy44MDQ1IDcuMjc4NSAzLjgxMiA3LjMzIDMuNzk3NSA3LjM5MDVDMy43NTIgNy41Nzk1IDMuNjUxIDcuOTg1IDMuNjMxNSA4LjA2OEMzLjYwNSA4LjE3NyAzLjU0NSA4LjIwMDUgMy40MzE1IDguMTQ3NUMyLjY4NTUgNy44MDA1IDIuMjE5NSA2LjcxIDIuMjE5NSA1LjgzNEMyLjIxOTUgMy45NDk1IDMuNTg4IDIuMjE5NSA2LjE2NTUgMi4yMTk1QzguMjM3NSAyLjIxOTUgOS44NDggMy42OTYgOS44NDggNS42NjlDOS44NDggNy43Mjc1IDguNTUwNSA5LjM4NDUgNi43NDg1IDkuMzg0NUM2LjE0MyA5LjM4NDUgNS41NzQ1IDkuMDY5NSA1LjM3OTUgOC42OThDNS4zNzk1IDguNjk4IDUuMDggOS44MzkgNS4wMDc1IDEwLjExOEM0Ljg2NjUgMTAuNjYgNC40NzU1IDExLjM0NiA0LjIzMyAxMS43MzU1QzQuNzkyIDExLjkwNzUgNS4zODUgMTIgNiAxMkM5LjMxMzUgMTIgMTIgOS4zMTM1IDEyIDZDMTIgMi42ODY1IDkuMzEzNSAwIDYgMEMyLjY4NjUgMCAwIDIuNjg2NSAwIDZaIiBmaWxsPSJ3aGl0ZSI+PC9wYXRoPgo8L3N2Zz4=&quot;) 4px 50% / 12px 12px no-repeat rgb(230, 0, 35) !important; position: absolute !important; opacity: 1 !important; z-index: 8675309 !important; display: none; cursor: pointer !important; border: medium !important; top: 2533px; left: 330px;">Save</span><span
		style="width: 24px !important; height: 24px !important; background: url(&quot;data:image/svg+xml;base64,PHN2ZyBpZD0ic291cmNlIiB3aWR0aD0iMjIiIGhlaWdodD0iMjIiIHZpZXdCb3g9IjAgMCAyMiAyMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMTEiIGN5PSIxMSIgcj0iMTEiIGZpbGw9ImJsYWNrIiBmaWxsLW9wYWNpdHk9IjAuOCI+PC9jaXJjbGU+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMTUuMDgzNCA0LjU4MzMzSDEzLjMzMzRWNS43NDk5OUgxNS4wODM0QzE1LjcyNjggNS43NDk5OSAxNi4yNSA2LjI3MzI0IDE2LjI1IDYuOTE2NjZWOC42NjY2NkgxNy40MTY3VjYuOTE2NjZDMTcuNDE2NyA1LjYyOTgzIDE2LjM3MDIgNC41ODMzMyAxNS4wODM0IDQuNTgzMzNaTTE2LjI1IDE1LjA4MzNDMTYuMjUgMTUuNzI2NyAxNS43MjY4IDE2LjI1IDE1LjA4MzQgMTYuMjVIMTMuMzMzNFYxNy40MTY3SDE1LjA4MzRDMTYuMzcwMiAxNy40MTY3IDE3LjQxNjcgMTYuMzcwMiAxNy40MTY3IDE1LjA4MzNWMTMuMzMzM0gxNi4yNVYxNS4wODMzWk01Ljc1MDA0IDE1LjA4MzNWMTMuMzMzM0g0LjU4MzM3VjE1LjA4MzNDNC41ODMzNyAxNi4zNzAyIDUuNjI5ODcgMTcuNDE2NyA2LjkxNjcxIDE3LjQxNjdIOC42NjY3MVYxNi4yNUg2LjkxNjcxQzYuMjczMjkgMTYuMjUgNS43NTAwNCAxNS43MjY3IDUuNzUwMDQgMTUuMDgzM1pNNS43NTAwNCA2LjkxNjY2QzUuNzUwMDQgNi4yNzMyNCA2LjI3MzI5IDUuNzQ5OTkgNi45MTY3MSA1Ljc0OTk5SDguNjY2NzFWNC41ODMzM0g2LjkxNjcxQzUuNjI5ODcgNC41ODMzMyA0LjU4MzM3IDUuNjI5ODMgNC41ODMzNyA2LjkxNjY2VjguNjY2NjZINS43NTAwNFY2LjkxNjY2Wk05LjI1MDA0IDEwLjcwODNDOS4yNTAwNCA5LjkwNDQ5IDkuOTA0NTQgOS4yNDk5OSAxMC43MDg0IDkuMjQ5OTlDMTEuNTEyMiA5LjI0OTk5IDEyLjE2NjcgOS45MDQ0OSAxMi4xNjY3IDEwLjcwODNDMTIuMTY2NyAxMS41MTIyIDExLjUxMjIgMTIuMTY2NyAxMC43MDg0IDEyLjE2NjdDOS45MDQ1NCAxMi4xNjY3IDkuMjUwMDQgMTEuNTEyMiA5LjI1MDA0IDEwLjcwODNaTTEzLjYyNSAxNC41QzEzLjg0OSAxNC41IDE0LjA3MyAxNC40MTQ4IDE0LjI0NCAxNC4yNDM5QzE0LjU4NTIgMTMuOTAyMSAxNC41ODUyIDEzLjM0NzkgMTQuMjQ0IDEzLjAwNjFMMTMuMDcwMyAxMS44MzNDMTMuMjM0MiAxMS40OTA2IDEzLjMzMzQgMTEuMTEyNiAxMy4zMzM0IDEwLjcwODNDMTMuMzMzNCA5LjI2MTA4IDEyLjE1NTYgOC4wODMzMyAxMC43MDg0IDguMDgzMzNDOS4yNjExMiA4LjA4MzMzIDguMDgzMzcgOS4yNjEwOCA4LjA4MzM3IDEwLjcwODNDOC4wODMzNyAxMi4xNTU2IDkuMjYxMTIgMTMuMzMzMyAxMC43MDg0IDEzLjMzMzNDMTEuMTEyNiAxMy4zMzMzIDExLjQ5MDYgMTMuMjM0MiAxMS44MzMgMTMuMDcwMkwxMy4wMDYxIDE0LjI0MzlDMTMuMTc3IDE0LjQxNDggMTMuNDAxIDE0LjUgMTMuNjI1IDE0LjVaIiBmaWxsPSJ3aGl0ZSI+PC9wYXRoPgo8L3N2Zz4=&quot;) 50% 50% / 24px 24px no-repeat rgba(0, 0, 0, 0.4) !important; position: absolute !important; opacity: 1 !important; z-index: 8675309 !important; display: none; cursor: pointer !important; border: medium !important; border-radius: 12px; top: 2533px; left: 707px;"></span>

</body>

</html>