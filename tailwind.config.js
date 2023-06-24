const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')
const plugin = require('tailwindcss/plugin')

module.exports = {
	content: ['./wp-content/themes/theme/src/**/*.{twig,js,jsx}', './wp-content/themes/theme/templates/**/*.{twig,js,jsx}'],
	theme: {
		container: {
			center: true,
			padding: {
				DEFAULT: '0.75rem'
			},
			screens: {
				lg: '1080px',
				xl: '1320px'
			}
		},
		extend: {
			screens: {
				sm: '576px',
				md: '768px',
				lg: '992px',
				xl: '1200px',
				xxl: '1440px'
			},
			colors: {
				gray: {
					50: '#fbfbfb',
					100: '#F2F2F2',
					200: '#EBEBEB',
					300: '#dee2e6',
					400: '#A3A3A3',
					500: '#888888',
					600: '#707070',
					700: '#5C5C5C',
					800: '#272F2F',
					900: '#151A1A'
				},
				cyan: {
					500: '#28A9B9'
				},
				blue: {
					500: '#00B0FF',
					700: '#01A2EA'
				},
				red: {
					500: '#FF0000'
				},
				pink: {
					500: '#E23796',
					700: '#C43484'
				}
			},
			fontFamily: {
				sans: ['Epilogue', ...defaultTheme.fontFamily.sans]
			},
			fontSize: {
				xs: ['.75rem', 1.833],
				'2xl': ['1.5rem', 1.25],
				'4xl': ['2.25rem', 1.2],
				'5xl': ['3.25rem', 1.2]
			},
			boxShadow: {
				primary: '0 0 30px rgba(255,0,0,.45)'
			}
		}
	},
	plugins: [
		require('@tailwindcss/typography'),
		require('@tailwindcss/forms')({
			strategy: 'class'
		}),
		// require('@tailwindcss/line-clamp'),
		require('@tailwindcss/aspect-ratio')
	]
}
