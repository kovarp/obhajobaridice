const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin')

module.exports = {
	entry: {
		app: './wp-content/themes/theme/src/app.js'
	},
	output: {
		path: path.resolve(__dirname, 'wp-content/themes/theme/assets/dist'),
		filename: 'js/[name].js',
		library: '[name]',
		libraryTarget: 'window'
	},
	devServer: {
		static: path.join(__dirname, 'wp-content/themes/theme/assets/dist'),
		compress: true,
		port: 3000,
		devMiddleware: {
			writeToDisk: true
		}
	},
	plugins: [
		new CleanWebpackPlugin(),
		new MiniCssExtractPlugin({
			filename: 'css/[name].css',
			chunkFilename: '[id].css'
		}),
		new SVGSpritemapPlugin('wp-content/themes/theme/assets/img/svg/**/*.svg', {
			output: {
				filename: 'img/sprite.svg'
			},
			sprite: {
				prefix: 'icon-',
				generate: {
					title: false
				}
			}
		})
	],
	module: {
		rules: [
			{
				test: /\.(js|jsx)$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader'
				}
			},
			{
				test: /\.css$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							url: false
						}
					},
					'postcss-loader'
				]
			}
		]
	}
}
