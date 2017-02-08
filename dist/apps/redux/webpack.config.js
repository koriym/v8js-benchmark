'use strict';

var webpack = require('webpack');

module.exports = {
  entry: {
    ssr: './src/page/index/render'
  },
  output: {
    filename: '[name].bundle.js'
  },
  module: {
    loaders: [{
      test: /\.jsx?$/,
      loaders: ['babel-loader'],
      exclude: /node_modules/
    }]
  },
  resolve: {
    extensions: ['.js', '.jsx']
  },
  plugins: [new webpack.LoaderOptionsPlugin({
    minimize: true,
    debug: false
  })]
};
//# sourceMappingURL=webpack.config.js.map