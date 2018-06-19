const ExtractTextPlugin = require('extract-text-webpack-plugin')
const webpack = require('webpack')
const path = require('path')

module.exports = {
  resolve: {
    alias: {
      'vue$': 'vue/dist/vue.esm.js',
      'images': path.resolve('src/assets/img')
    }
  },
  entry: {
    "index": './src/index.js',
    "index.min": "./src/index.js"
  },
  stats: { warnings:false }, // Hide warnings
  output: {
      path: path.resolve(__dirname, 'dist'),
      filename: "[name].bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader',
        options: {
          loaders: {
            // Since sass-loader (weirdly) has SCSS as its default parse mode, we map
            // the "scss" and "sass" values for the lang attribute to the right configs here.
            // other preprocessors should work out of the box, no loader config like this necessary.
            'scss': 'vue-style-loader!css-loader!sass-loader',
            'sass': 'vue-style-loader!css-loader!sass-loader?indentedSyntax'
          }
        }
      },
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: [
              ["env", {
                "targets": {
                  "browsers": [
                    "Chrome >= 52",
                    "FireFox >= 44",
                    "Safari >= 7",
                    "Explorer 11",
                    "last 4 Edge versions"
                  ]
                },
                "useBuiltIns": true
              }],
              "stage-2"
            ]
          }
        }
      },
      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            {
              loader: 'css-loader',
              options: {
                importLoaders: 1,
                // url: false
              }
            },
            'postcss-loader'
          ]
        })
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: [{
          loader: 'file-loader',
          options: {
            outputPath: 'img/'
          }
        }]
      }
    ]
  },
  plugins: [
    new webpack.ProvidePlugin({
       throttle: 'lodash.throttle'
    }),
    new webpack.optimize.UglifyJsPlugin({
      include: /\.min\.bundle\.js$/,
      minimize: true
    }),
    new ExtractTextPlugin('styles.css')
  ]
}
