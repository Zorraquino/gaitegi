import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        screens: {
			mini: '320px' /* min-width: 320px */,
			mobile: '360px' /* min-width: 360px */,
			tablet: '768px' /* min-width: 768px */,
			laptop: '1024px' /* min-width: 1024px */,
			desktop: '1280px' /* min-width: 1280px */,
			desktopxl: '1440px' /* min-width: 1440px */,
		},
        fontSize: {
			'title-xxl': ['5.5rem', { lineHeight: '6rem', fontWeight: '400' }],
			'title-xl': ['4.5rem', { lineHeight: '5.5rem', fontWeight: '400' }],
			'title-l': ['3.5rem', { lineHeight: '4.5rem', fontWeight: '400' }],
			'title-m': ['2.5rem', { lineHeight: '3rem', fontWeight: '400' }],
			'title-s': ['2.25rem', { lineHeight: '3rem', fontWeight: '400' }],
			'body-xxl': ['2rem', { lineHeight: '2.5rem', fontWeight: '400' }],
			'body-xl': ['1.5rem', { lineHeight: '2rem', fontWeight: '400' }],
			'body-l': ['1.25rem', { lineHeight: '1.75rem', fontWeight: '400' }],
			'body-m': ['1rem', { lineHeight: '1.5rem', fontWeight: '400' }],
			'body-s': ['0.875rem', { lineHeight: '1.25rem', fontWeight: '400' }],
			'body-xs': ['0.75rem', { lineHeight: '1rem', fontWeight: '400' }],
			'caption-m': ['0.75rem', { lineHeight: '1.375rem', fontWeight: '400' }],
		},
        extend: {
            fontFamily: {
                funnel: ['FunnelDisplay', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
