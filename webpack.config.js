'use strict';
const WebpackConfig = require('webpack-config');

module.exports = new WebpackConfig.Config().extend(
    'kwf-webpack/config/webpack.kwc.config.js'
).merge({

});
