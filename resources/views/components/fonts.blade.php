<style>
@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-Light.eot')}});
    src: local('TT Firs Neue Light'), local('TTFirsNeue-Light'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Light.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Light.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Light.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Light.ttf')}}) format('truetype');
    font-weight: 300;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-Regular.eot')}});
    src: local('TT Firs Neue Regular'), local('TTFirsNeue-Regular'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Regular.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Regular.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Regular.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Regular.ttf')}}) format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-BoldItalic.eot')}});
    src: local('TT Firs Neue Bold Italic'), local('TTFirsNeue-BoldItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BoldItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BoldItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BoldItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BoldItalic.ttf')}}) format('truetype');
    font-weight: bold;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBoldItalic.eot')}});
    src: local('TT Firs Neue DemiBold Italic'), local('TTFirsNeue-DemiBoldItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBoldItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBoldItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBoldItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBoldItalic.ttf')}}) format('truetype');
    font-weight: 600;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLight.eot')}});
    src: local('TT Firs Neue ExtraLight'), local('TTFirsNeue-ExtraLight'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLight.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLight.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLight.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLight.ttf')}}) format('truetype');
    font-weight: 200;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-ThinItalic.eot')}});
    src: local('TT Firs Neue Thin Italic'), local('TTFirsNeue-ThinItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ThinItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ThinItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ThinItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ThinItalic.ttf')}}) format('truetype');
    font-weight: 100;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-MediumItalic.eot')}});
    src: local('TT Firs Neue Medium Italic'), local('TTFirsNeue-MediumItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-MediumItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-MediumItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-MediumItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-MediumItalic.ttf')}}) format('truetype');
    font-weight: 500;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBold.eot')}});
    src: local('TT Firs Neue DemiBold'), local('TTFirsNeue-DemiBold'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBold.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBold.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBold.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-DemiBold.ttf')}}) format('truetype');
    font-weight: 600;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-BlackItalic.eot')}});
    src: local('TT Firs Neue Black Italic'), local('TTFirsNeue-BlackItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BlackItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BlackItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BlackItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-BlackItalic.ttf')}}) format('truetype');
    font-weight: 900;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-LightItalic.eot')}});
    src: local('TT Firs Neue Light Italic'), local('TTFirsNeue-LightItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-LightItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-LightItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-LightItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-LightItalic.ttf')}}) format('truetype');
    font-weight: 300;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLightItalic.eot')}});
    src: local('TT Firs Neue ExtraLight Italic'), local('TTFirsNeue-ExtraLightItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLightItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLightItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLightItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraLightItalic.ttf')}}) format('truetype');
    font-weight: 200;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-Bold.eot')}});
    src: local('TT Firs Neue Bold'), local('TTFirsNeue-Bold'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Bold.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Bold.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Bold.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Bold.ttf')}}) format('truetype');
    font-weight: bold;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBold.eot')}});
    src: local('TT Firs Neue ExtraBold'), local('TTFirsNeue-ExtraBold'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBold.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBold.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBold.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBold.ttf')}}) format('truetype');
    font-weight: 800;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-Medium.eot')}});
    src: local('TT Firs Neue Medium'), local('TTFirsNeue-Medium'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Medium.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Medium.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Medium.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Medium.ttf')}}) format('truetype');
    font-weight: 500;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-Thin.eot')}});
    src: local('TT Firs Neue Thin'), local('TTFirsNeue-Thin'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Thin.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Thin.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Thin.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Thin.ttf')}}) format('truetype');
    font-weight: 100;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBoldItalic.eot')}});
    src: local('TT Firs Neue ExtraBold Italic'), local('TTFirsNeue-ExtraBoldItalic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBoldItalic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBoldItalic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBoldItalic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-ExtraBoldItalic.ttf')}}) format('truetype');
    font-weight: 800;
    font-style: italic;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-Black.eot')}});
    src: local('TT Firs Neue Black'), local('TTFirsNeue-Black'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Black.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Black.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Black.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Black.ttf')}}) format('truetype');
    font-weight: 900;
    font-style: normal;
}

@font-face {
    font-family: 'TT Firs Neue';
    src: url({{ Vite::asset('resources/fonts/TTFirsNeue-Italic.eot')}});
    src: local('TT Firs Neue Italic'), local('TTFirsNeue-Italic'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Italic.eot')}}?#iefix) format('embedded-opentype'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Italic.woff2')}}) format('woff2'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Italic.woff')}}) format('woff'),
        url({{ Vite::asset('resources/fonts/TTFirsNeue-Italic.ttf')}}) format('truetype');
    font-weight: normal;
    font-style: italic;
}
</style>
