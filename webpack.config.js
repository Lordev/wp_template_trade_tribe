const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const devMode = process.env.NODE_ENV !== "production";

const plugins = [
  new MiniCssExtractPlugin({
    filename: devMode ? "[name].css" : "[name].[contenthash].css",
    chunkFilename: devMode ? "[id].css" : "[id].[contenthash].css",
  }),
  new webpack.HotModuleReplacementPlugin(),
  new BrowserSyncPlugin({
    proxy: 'http://wordpress',
    files: [
      'src/themes/blankslate/**/*.css',
      'src/themes/blankslate/**/*.js',
      'src/themes/blankslate/**/*.php'
    ],
    injectChanges: true,
  }, { reload: false }),
];

module.exports = {
  plugins,
  entry: [

    __dirname + '/src/themes/blankslate/assets/js/main.js',
    __dirname + '/src/themes/blankslate/assets/scss/main.scss'
  ],
  output: {
    path: path.resolve(__dirname, 'src/themes/blankslate/dist'),
  },
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          devMode ? "style-loader" : MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          {
            loader: "sass-loader",
            options: {
              sourceMap: true, 
            },
          },
        ],
      },
    ],
  },
  devtool: 'source-map',
};
