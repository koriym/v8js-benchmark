'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.hello = undefined;

var _ActionTypes = require('../constants/ActionTypes');

var types = _interopRequireWildcard(_ActionTypes);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

var hello = exports.hello = function hello() {
  return {
    type: types.HELLO
  };
};
//# sourceMappingURL=index.js.map