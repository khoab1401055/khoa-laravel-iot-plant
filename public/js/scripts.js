/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/scripts.js":
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var spin_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! spin.js */ \"./node_modules/spin.js/spin.js\");\n\nvar toggler = document.querySelectorAll('.form-password-toggle i');\nif (typeof toggler !== 'undefined' && toggler !== null) {\n  toggler.forEach(function (el) {\n    el.addEventListener('click', function (e) {\n      e.preventDefault();\n      var formPasswordToggle = el.closest('.form-password-toggle');\n      var formPasswordToggleIcon = formPasswordToggle.querySelector('i');\n      var formPasswordToggleInput = formPasswordToggle.querySelector('input');\n      if (formPasswordToggleInput.getAttribute('type') === 'text') {\n        formPasswordToggleInput.setAttribute('type', 'password');\n        formPasswordToggleIcon.classList.replace('bx-show', 'bx-hide');\n      } else if (formPasswordToggleInput.getAttribute('type') === 'password') {\n        formPasswordToggleInput.setAttribute('type', 'text');\n        formPasswordToggleIcon.classList.replace('bx-hide', 'bx-show');\n      }\n    });\n  });\n}\n\n//\n$('#submit-ajax').submit(function (e) {\n  e.preventDefault(); // Ngăn chặn form gửi theo cách thông thường\n\n  var form = $(this);\n  var url = form.attr('action');\n  var method = form.attr('method');\n  var data = form.serialize();\n  var target = document.getElementById('loading');\n  var spinner = new spin_js__WEBPACK_IMPORTED_MODULE_0__.Spinner({\n    color: '#C2E19D',\n    lines: 12\n  }).spin(target);\n  $('body').addClass('spinner-active');\n  $.ajaxSetup({\n    headers: {\n      'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n    }\n  });\n  $.ajax({\n    url: url,\n    method: method,\n    data: data,\n    success: function success(response) {\n      spinner.stop();\n      toastr.clear();\n      $('body').removeClass('spinner-active');\n      if (response.success) {\n        toastr.success(response.success);\n        // Redirect or perform necessary actions\n        window.location.href = response.route_name;\n      } else {\n        toastr.error(response.errors);\n      }\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QztNQUN2QyxJQUFJSixRQUFRLENBQUNELE9BQU8sRUFBRTtRQUNsQkcsTUFBTSxDQUFDSCxPQUFPLENBQUNDLFFBQVEsQ0FBQ0QsT0FBTyxDQUFDO1FBQ2hDO1FBQ0FNLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxJQUFJLEdBQUdQLFFBQVEsQ0FBQ1EsVUFBVTtNQUM5QyxDQUFDLE1BQU07UUFDSE4sTUFBTSxDQUFDTyxLQUFLLENBQUNULFFBQVEsQ0FBQ1UsTUFBTSxDQUFDO01BQ2pDO0lBRUo7RUFDSixDQUFDLENBQUM7QUFJTixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcz9mNzE0Il0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB7XG4gICAgU3Bpbm5lclxufSBmcm9tICdzcGluLmpzJztcbmNvbnN0IHRvZ2dsZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuZm9ybS1wYXNzd29yZC10b2dnbGUgaScpXG5pZiAodHlwZW9mIHRvZ2dsZXIgIT09ICd1bmRlZmluZWQnICYmIHRvZ2dsZXIgIT09IG51bGwpIHtcblxuICAgIHRvZ2dsZXIuZm9yRWFjaChlbCA9PiB7XG4gICAgICAgIGVsLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZSA9PiB7XG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgICAgIGNvbnN0IGZvcm1QYXNzd29yZFRvZ2dsZSA9IGVsLmNsb3Nlc3QoJy5mb3JtLXBhc3N3b3JkLXRvZ2dsZScpXG4gICAgICAgICAgICBjb25zdCBmb3JtUGFzc3dvcmRUb2dnbGVJY29uID0gZm9ybVBhc3N3b3JkVG9nZ2xlLnF1ZXJ5U2VsZWN0b3IoJ2knKVxuICAgICAgICAgICAgY29uc3QgZm9ybVBhc3N3b3JkVG9nZ2xlSW5wdXQgPSBmb3JtUGFzc3dvcmRUb2dnbGUucXVlcnlTZWxlY3RvcignaW5wdXQnKVxuXG4gICAgICAgICAgICBpZiAoZm9ybVBhc3N3b3JkVG9nZ2xlSW5wdXQuZ2V0QXR0cmlidXRlKCd0eXBlJykgPT09ICd0ZXh0Jykge1xuICAgICAgICAgICAgICAgIGZvcm1QYXNzd29yZFRvZ2dsZUlucHV0LnNldEF0dHJpYnV0ZSgndHlwZScsICdwYXNzd29yZCcpXG4gICAgICAgICAgICAgICAgZm9ybVBhc3N3b3JkVG9nZ2xlSWNvbi5jbGFzc0xpc3QucmVwbGFjZSgnYngtc2hvdycsICdieC1oaWRlJylcbiAgICAgICAgICAgIH0gZWxzZSBpZiAoZm9ybVBhc3N3b3JkVG9nZ2xlSW5wdXQuZ2V0QXR0cmlidXRlKCd0eXBlJykgPT09ICdwYXNzd29yZCcpIHtcbiAgICAgICAgICAgICAgICBmb3JtUGFzc3dvcmRUb2dnbGVJbnB1dC5zZXRBdHRyaWJ1dGUoJ3R5cGUnLCAndGV4dCcpXG4gICAgICAgICAgICAgICAgZm9ybVBhc3N3b3JkVG9nZ2xlSWNvbi5jbGFzc0xpc3QucmVwbGFjZSgnYngtaGlkZScsICdieC1zaG93JylcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSlcbiAgICB9KVxufVxuXG4vL1xuJCgnI3N1Ym1pdC1hamF4Jykuc3VibWl0KGZ1bmN0aW9uKGUpIHtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7IC8vIE5nxINuIGNo4bq3biBmb3JtIGfhu61pIHRoZW8gY8OhY2ggdGjDtG5nIHRoxrDhu51uZ1xuXG4gICAgdmFyIGZvcm0gPSAkKHRoaXMpO1xuICAgIHZhciB1cmwgPSBmb3JtLmF0dHIoJ2FjdGlvbicpO1xuICAgIHZhciBtZXRob2QgPSBmb3JtLmF0dHIoJ21ldGhvZCcpO1xuICAgIHZhciBkYXRhID0gZm9ybS5zZXJpYWxpemUoKTtcbiAgICBjb25zdCB0YXJnZXQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbG9hZGluZycpO1xuICAgIGNvbnN0IHNwaW5uZXIgPSBuZXcgU3Bpbm5lcih7XG4gICAgICAgIGNvbG9yOiAnI0MyRTE5RCcsXG4gICAgICAgIGxpbmVzOiAxMlxuICAgIH0pLnNwaW4odGFyZ2V0KTtcbiAgICAkKCdib2R5JykuYWRkQ2xhc3MoJ3NwaW5uZXItYWN0aXZlJyk7XG4gICAgJC5hamF4U2V0dXAoe1xuICAgICAgICBoZWFkZXJzOiB7XG4gICAgICAgICAgICAnWC1DU1JGLVRPS0VOJzogJCgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKVxuICAgICAgICB9XG4gICAgfSk7XG4gICAgJC5hamF4KHtcbiAgICAgICAgdXJsOiB1cmwsXG4gICAgICAgIG1ldGhvZDogbWV0aG9kLFxuICAgICAgICBkYXRhOiBkYXRhLFxuICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSkge1xuICAgICAgICAgICAgc3Bpbm5lci5zdG9wKCk7XG4gICAgICAgICAgICB0b2FzdHIuY2xlYXIoKTtcbiAgICAgICAgICAgICQoJ2JvZHknKS5yZW1vdmVDbGFzcygnc3Bpbm5lci1hY3RpdmUnKTtcbiAgICAgICAgICAgIGlmIChyZXNwb25zZS5zdWNjZXNzKSB7XG4gICAgICAgICAgICAgICAgdG9hc3RyLnN1Y2Nlc3MocmVzcG9uc2Uuc3VjY2Vzcyk7XG4gICAgICAgICAgICAgICAgLy8gUmVkaXJlY3Qgb3IgcGVyZm9ybSBuZWNlc3NhcnkgYWN0aW9uc1xuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gcmVzcG9uc2Uucm91dGVfbmFtZTtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgdG9hc3RyLmVycm9yKHJlc3BvbnNlLmVycm9ycyk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgfVxuICAgIH0pXG5cblxuXG59KTtcbiJdLCJuYW1lcyI6WyJTcGlubmVyIiwidG9nZ2xlciIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJlbCIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJmb3JtUGFzc3dvcmRUb2dnbGUiLCJjbG9zZXN0IiwiZm9ybVBhc3N3b3JkVG9nZ2xlSWNvbiIsInF1ZXJ5U2VsZWN0b3IiLCJmb3JtUGFzc3dvcmRUb2dnbGVJbnB1dCIsImdldEF0dHJpYnV0ZSIsInNldEF0dHJpYnV0ZSIsImNsYXNzTGlzdCIsInJlcGxhY2UiLCIkIiwic3VibWl0IiwiZm9ybSIsInVybCIsImF0dHIiLCJtZXRob2QiLCJkYXRhIiwic2VyaWFsaXplIiwidGFyZ2V0IiwiZ2V0RWxlbWVudEJ5SWQiLCJzcGlubmVyIiwiY29sb3IiLCJsaW5lcyIsInNwaW4iLCJhZGRDbGFzcyIsImFqYXhTZXR1cCIsImhlYWRlcnMiLCJhamF4Iiwic3VjY2VzcyIsInJlc3BvbnNlIiwic3RvcCIsInRvYXN0ciIsImNsZWFyIiwicmVtb3ZlQ2xhc3MiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsImhyZWYiLCJyb3V0ZV9uYW1lIiwiZXJyb3IiLCJlcnJvcnMiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/scripts.js\n");

/***/ }),

/***/ "./node_modules/spin.js/spin.js":
/*!**************************************!*\
  !*** ./node_modules/spin.js/spin.js ***!
  \**************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   Spinner: () => (/* binding */ Spinner)\n/* harmony export */ });\nvar __assign = (undefined && undefined.__assign) || function () {\r\n    __assign = Object.assign || function(t) {\r\n        for (var s, i = 1, n = arguments.length; i < n; i++) {\r\n            s = arguments[i];\r\n            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))\r\n                t[p] = s[p];\r\n        }\r\n        return t;\r\n    };\r\n    return __assign.apply(this, arguments);\r\n};\r\nvar defaults = {\r\n    lines: 12,\r\n    length: 7,\r\n    width: 5,\r\n    radius: 10,\r\n    scale: 1.0,\r\n    corners: 1,\r\n    color: '#000',\r\n    fadeColor: 'transparent',\r\n    animation: 'spinner-line-fade-default',\r\n    rotate: 0,\r\n    direction: 1,\r\n    speed: 1,\r\n    zIndex: 2e9,\r\n    className: 'spinner',\r\n    top: '50%',\r\n    left: '50%',\r\n    shadow: '0 0 1px transparent',\r\n    position: 'absolute',\r\n};\r\nvar Spinner = /** @class */ (function () {\r\n    function Spinner(opts) {\r\n        if (opts === void 0) { opts = {}; }\r\n        this.opts = __assign(__assign({}, defaults), opts);\r\n    }\r\n    /**\r\n     * Adds the spinner to the given target element. If this instance is already\r\n     * spinning, it is automatically removed from its previous target by calling\r\n     * stop() internally.\r\n     */\r\n    Spinner.prototype.spin = function (target) {\r\n        this.stop();\r\n        this.el = document.createElement('div');\r\n        this.el.className = this.opts.className;\r\n        this.el.setAttribute('role', 'progressbar');\r\n        css(this.el, {\r\n            position: this.opts.position,\r\n            width: 0,\r\n            zIndex: this.opts.zIndex,\r\n            left: this.opts.left,\r\n            top: this.opts.top,\r\n            transform: \"scale(\" + this.opts.scale + \")\",\r\n        });\r\n        if (target) {\r\n            target.insertBefore(this.el, target.firstChild || null);\r\n        }\r\n        drawLines(this.el, this.opts);\r\n        return this;\r\n    };\r\n    /**\r\n     * Stops and removes the Spinner.\r\n     * Stopped spinners may be reused by calling spin() again.\r\n     */\r\n    Spinner.prototype.stop = function () {\r\n        if (this.el) {\r\n            if (typeof requestAnimationFrame !== 'undefined') {\r\n                cancelAnimationFrame(this.animateId);\r\n            }\r\n            else {\r\n                clearTimeout(this.animateId);\r\n            }\r\n            if (this.el.parentNode) {\r\n                this.el.parentNode.removeChild(this.el);\r\n            }\r\n            this.el = undefined;\r\n        }\r\n        return this;\r\n    };\r\n    return Spinner;\r\n}());\r\n\r\n/**\r\n * Sets multiple style properties at once.\r\n */\r\nfunction css(el, props) {\r\n    for (var prop in props) {\r\n        el.style[prop] = props[prop];\r\n    }\r\n    return el;\r\n}\r\n/**\r\n * Returns the line color from the given string or array.\r\n */\r\nfunction getColor(color, idx) {\r\n    return typeof color == 'string' ? color : color[idx % color.length];\r\n}\r\n/**\r\n * Internal method that draws the individual lines.\r\n */\r\nfunction drawLines(el, opts) {\r\n    var borderRadius = (Math.round(opts.corners * opts.width * 500) / 1000) + 'px';\r\n    var shadow = 'none';\r\n    if (opts.shadow === true) {\r\n        shadow = '0 2px 4px #000'; // default shadow\r\n    }\r\n    else if (typeof opts.shadow === 'string') {\r\n        shadow = opts.shadow;\r\n    }\r\n    var shadows = parseBoxShadow(shadow);\r\n    for (var i = 0; i < opts.lines; i++) {\r\n        var degrees = ~~(360 / opts.lines * i + opts.rotate);\r\n        var backgroundLine = css(document.createElement('div'), {\r\n            position: 'absolute',\r\n            top: -opts.width / 2 + \"px\",\r\n            width: (opts.length + opts.width) + 'px',\r\n            height: opts.width + 'px',\r\n            background: getColor(opts.fadeColor, i),\r\n            borderRadius: borderRadius,\r\n            transformOrigin: 'left',\r\n            transform: \"rotate(\" + degrees + \"deg) translateX(\" + opts.radius + \"px)\",\r\n        });\r\n        var delay = i * opts.direction / opts.lines / opts.speed;\r\n        delay -= 1 / opts.speed; // so initial animation state will include trail\r\n        var line = css(document.createElement('div'), {\r\n            width: '100%',\r\n            height: '100%',\r\n            background: getColor(opts.color, i),\r\n            borderRadius: borderRadius,\r\n            boxShadow: normalizeShadow(shadows, degrees),\r\n            animation: 1 / opts.speed + \"s linear \" + delay + \"s infinite \" + opts.animation,\r\n        });\r\n        backgroundLine.appendChild(line);\r\n        el.appendChild(backgroundLine);\r\n    }\r\n}\r\nfunction parseBoxShadow(boxShadow) {\r\n    var regex = /^\\s*([a-zA-Z]+\\s+)?(-?\\d+(\\.\\d+)?)([a-zA-Z]*)\\s+(-?\\d+(\\.\\d+)?)([a-zA-Z]*)(.*)$/;\r\n    var shadows = [];\r\n    for (var _i = 0, _a = boxShadow.split(','); _i < _a.length; _i++) {\r\n        var shadow = _a[_i];\r\n        var matches = shadow.match(regex);\r\n        if (matches === null) {\r\n            continue; // invalid syntax\r\n        }\r\n        var x = +matches[2];\r\n        var y = +matches[5];\r\n        var xUnits = matches[4];\r\n        var yUnits = matches[7];\r\n        if (x === 0 && !xUnits) {\r\n            xUnits = yUnits;\r\n        }\r\n        if (y === 0 && !yUnits) {\r\n            yUnits = xUnits;\r\n        }\r\n        if (xUnits !== yUnits) {\r\n            continue; // units must match to use as coordinates\r\n        }\r\n        shadows.push({\r\n            prefix: matches[1] || '',\r\n            x: x,\r\n            y: y,\r\n            xUnits: xUnits,\r\n            yUnits: yUnits,\r\n            end: matches[8],\r\n        });\r\n    }\r\n    return shadows;\r\n}\r\n/**\r\n * Modify box-shadow x/y offsets to counteract rotation\r\n */\r\nfunction normalizeShadow(shadows, degrees) {\r\n    var normalized = [];\r\n    for (var _i = 0, shadows_1 = shadows; _i < shadows_1.length; _i++) {\r\n        var shadow = shadows_1[_i];\r\n        var xy = convertOffset(shadow.x, shadow.y, degrees);\r\n        normalized.push(shadow.prefix + xy[0] + shadow.xUnits + ' ' + xy[1] + shadow.yUnits + shadow.end);\r\n    }\r\n    return normalized.join(', ');\r\n}\r\nfunction convertOffset(x, y, degrees) {\r\n    var radians = degrees * Math.PI / 180;\r\n    var sin = Math.sin(radians);\r\n    var cos = Math.cos(radians);\r\n    return [\r\n        Math.round((x * cos + y * sin) * 1000) / 1000,\r\n        Math.round((-x * sin + y * cos) * 1000) / 1000,\r\n    ];\r\n}\r\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9ub2RlX21vZHVsZXMvc3Bpbi5qcy9zcGluLmpzIiwibWFwcGluZ3MiOiI7Ozs7QUFBQSxnQkFBZ0IsU0FBSSxJQUFJLFNBQUk7QUFDNUI7QUFDQSxpREFBaUQsT0FBTztBQUN4RDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSwrQkFBK0I7QUFDL0Isd0NBQXdDO0FBQ3hDO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFNBQVM7QUFDVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsQ0FBQztBQUNrQjtBQUNuQjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLG1DQUFtQztBQUNuQztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0Esb0JBQW9CLGdCQUFnQjtBQUNwQztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFNBQVM7QUFDVDtBQUNBLGlDQUFpQztBQUNqQztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLFNBQVM7QUFDVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGdEQUFnRCxnQkFBZ0I7QUFDaEU7QUFDQTtBQUNBO0FBQ0Esc0JBQXNCO0FBQ3RCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLHNCQUFzQjtBQUN0QjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsU0FBUztBQUNUO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSwwQ0FBMEMsdUJBQXVCO0FBQ2pFO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9zcGluLmpzL3NwaW4uanM/MWYyZCJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgX19hc3NpZ24gPSAodGhpcyAmJiB0aGlzLl9fYXNzaWduKSB8fCBmdW5jdGlvbiAoKSB7XHJcbiAgICBfX2Fzc2lnbiA9IE9iamVjdC5hc3NpZ24gfHwgZnVuY3Rpb24odCkge1xyXG4gICAgICAgIGZvciAodmFyIHMsIGkgPSAxLCBuID0gYXJndW1lbnRzLmxlbmd0aDsgaSA8IG47IGkrKykge1xyXG4gICAgICAgICAgICBzID0gYXJndW1lbnRzW2ldO1xyXG4gICAgICAgICAgICBmb3IgKHZhciBwIGluIHMpIGlmIChPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwocywgcCkpXHJcbiAgICAgICAgICAgICAgICB0W3BdID0gc1twXTtcclxuICAgICAgICB9XHJcbiAgICAgICAgcmV0dXJuIHQ7XHJcbiAgICB9O1xyXG4gICAgcmV0dXJuIF9fYXNzaWduLmFwcGx5KHRoaXMsIGFyZ3VtZW50cyk7XHJcbn07XHJcbnZhciBkZWZhdWx0cyA9IHtcclxuICAgIGxpbmVzOiAxMixcclxuICAgIGxlbmd0aDogNyxcclxuICAgIHdpZHRoOiA1LFxyXG4gICAgcmFkaXVzOiAxMCxcclxuICAgIHNjYWxlOiAxLjAsXHJcbiAgICBjb3JuZXJzOiAxLFxyXG4gICAgY29sb3I6ICcjMDAwJyxcclxuICAgIGZhZGVDb2xvcjogJ3RyYW5zcGFyZW50JyxcclxuICAgIGFuaW1hdGlvbjogJ3NwaW5uZXItbGluZS1mYWRlLWRlZmF1bHQnLFxyXG4gICAgcm90YXRlOiAwLFxyXG4gICAgZGlyZWN0aW9uOiAxLFxyXG4gICAgc3BlZWQ6IDEsXHJcbiAgICB6SW5kZXg6IDJlOSxcclxuICAgIGNsYXNzTmFtZTogJ3NwaW5uZXInLFxyXG4gICAgdG9wOiAnNTAlJyxcclxuICAgIGxlZnQ6ICc1MCUnLFxyXG4gICAgc2hhZG93OiAnMCAwIDFweCB0cmFuc3BhcmVudCcsXHJcbiAgICBwb3NpdGlvbjogJ2Fic29sdXRlJyxcclxufTtcclxudmFyIFNwaW5uZXIgPSAvKiogQGNsYXNzICovIChmdW5jdGlvbiAoKSB7XHJcbiAgICBmdW5jdGlvbiBTcGlubmVyKG9wdHMpIHtcclxuICAgICAgICBpZiAob3B0cyA9PT0gdm9pZCAwKSB7IG9wdHMgPSB7fTsgfVxyXG4gICAgICAgIHRoaXMub3B0cyA9IF9fYXNzaWduKF9fYXNzaWduKHt9LCBkZWZhdWx0cyksIG9wdHMpO1xyXG4gICAgfVxyXG4gICAgLyoqXHJcbiAgICAgKiBBZGRzIHRoZSBzcGlubmVyIHRvIHRoZSBnaXZlbiB0YXJnZXQgZWxlbWVudC4gSWYgdGhpcyBpbnN0YW5jZSBpcyBhbHJlYWR5XHJcbiAgICAgKiBzcGlubmluZywgaXQgaXMgYXV0b21hdGljYWxseSByZW1vdmVkIGZyb20gaXRzIHByZXZpb3VzIHRhcmdldCBieSBjYWxsaW5nXHJcbiAgICAgKiBzdG9wKCkgaW50ZXJuYWxseS5cclxuICAgICAqL1xyXG4gICAgU3Bpbm5lci5wcm90b3R5cGUuc3BpbiA9IGZ1bmN0aW9uICh0YXJnZXQpIHtcclxuICAgICAgICB0aGlzLnN0b3AoKTtcclxuICAgICAgICB0aGlzLmVsID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgdGhpcy5lbC5jbGFzc05hbWUgPSB0aGlzLm9wdHMuY2xhc3NOYW1lO1xyXG4gICAgICAgIHRoaXMuZWwuc2V0QXR0cmlidXRlKCdyb2xlJywgJ3Byb2dyZXNzYmFyJyk7XHJcbiAgICAgICAgY3NzKHRoaXMuZWwsIHtcclxuICAgICAgICAgICAgcG9zaXRpb246IHRoaXMub3B0cy5wb3NpdGlvbixcclxuICAgICAgICAgICAgd2lkdGg6IDAsXHJcbiAgICAgICAgICAgIHpJbmRleDogdGhpcy5vcHRzLnpJbmRleCxcclxuICAgICAgICAgICAgbGVmdDogdGhpcy5vcHRzLmxlZnQsXHJcbiAgICAgICAgICAgIHRvcDogdGhpcy5vcHRzLnRvcCxcclxuICAgICAgICAgICAgdHJhbnNmb3JtOiBcInNjYWxlKFwiICsgdGhpcy5vcHRzLnNjYWxlICsgXCIpXCIsXHJcbiAgICAgICAgfSk7XHJcbiAgICAgICAgaWYgKHRhcmdldCkge1xyXG4gICAgICAgICAgICB0YXJnZXQuaW5zZXJ0QmVmb3JlKHRoaXMuZWwsIHRhcmdldC5maXJzdENoaWxkIHx8IG51bGwpO1xyXG4gICAgICAgIH1cclxuICAgICAgICBkcmF3TGluZXModGhpcy5lbCwgdGhpcy5vcHRzKTtcclxuICAgICAgICByZXR1cm4gdGhpcztcclxuICAgIH07XHJcbiAgICAvKipcclxuICAgICAqIFN0b3BzIGFuZCByZW1vdmVzIHRoZSBTcGlubmVyLlxyXG4gICAgICogU3RvcHBlZCBzcGlubmVycyBtYXkgYmUgcmV1c2VkIGJ5IGNhbGxpbmcgc3BpbigpIGFnYWluLlxyXG4gICAgICovXHJcbiAgICBTcGlubmVyLnByb3RvdHlwZS5zdG9wID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIGlmICh0aGlzLmVsKSB7XHJcbiAgICAgICAgICAgIGlmICh0eXBlb2YgcmVxdWVzdEFuaW1hdGlvbkZyYW1lICE9PSAndW5kZWZpbmVkJykge1xyXG4gICAgICAgICAgICAgICAgY2FuY2VsQW5pbWF0aW9uRnJhbWUodGhpcy5hbmltYXRlSWQpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgY2xlYXJUaW1lb3V0KHRoaXMuYW5pbWF0ZUlkKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAodGhpcy5lbC5wYXJlbnROb2RlKSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmVsLnBhcmVudE5vZGUucmVtb3ZlQ2hpbGQodGhpcy5lbCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgdGhpcy5lbCA9IHVuZGVmaW5lZDtcclxuICAgICAgICB9XHJcbiAgICAgICAgcmV0dXJuIHRoaXM7XHJcbiAgICB9O1xyXG4gICAgcmV0dXJuIFNwaW5uZXI7XHJcbn0oKSk7XHJcbmV4cG9ydCB7IFNwaW5uZXIgfTtcclxuLyoqXHJcbiAqIFNldHMgbXVsdGlwbGUgc3R5bGUgcHJvcGVydGllcyBhdCBvbmNlLlxyXG4gKi9cclxuZnVuY3Rpb24gY3NzKGVsLCBwcm9wcykge1xyXG4gICAgZm9yICh2YXIgcHJvcCBpbiBwcm9wcykge1xyXG4gICAgICAgIGVsLnN0eWxlW3Byb3BdID0gcHJvcHNbcHJvcF07XHJcbiAgICB9XHJcbiAgICByZXR1cm4gZWw7XHJcbn1cclxuLyoqXHJcbiAqIFJldHVybnMgdGhlIGxpbmUgY29sb3IgZnJvbSB0aGUgZ2l2ZW4gc3RyaW5nIG9yIGFycmF5LlxyXG4gKi9cclxuZnVuY3Rpb24gZ2V0Q29sb3IoY29sb3IsIGlkeCkge1xyXG4gICAgcmV0dXJuIHR5cGVvZiBjb2xvciA9PSAnc3RyaW5nJyA/IGNvbG9yIDogY29sb3JbaWR4ICUgY29sb3IubGVuZ3RoXTtcclxufVxyXG4vKipcclxuICogSW50ZXJuYWwgbWV0aG9kIHRoYXQgZHJhd3MgdGhlIGluZGl2aWR1YWwgbGluZXMuXHJcbiAqL1xyXG5mdW5jdGlvbiBkcmF3TGluZXMoZWwsIG9wdHMpIHtcclxuICAgIHZhciBib3JkZXJSYWRpdXMgPSAoTWF0aC5yb3VuZChvcHRzLmNvcm5lcnMgKiBvcHRzLndpZHRoICogNTAwKSAvIDEwMDApICsgJ3B4JztcclxuICAgIHZhciBzaGFkb3cgPSAnbm9uZSc7XHJcbiAgICBpZiAob3B0cy5zaGFkb3cgPT09IHRydWUpIHtcclxuICAgICAgICBzaGFkb3cgPSAnMCAycHggNHB4ICMwMDAnOyAvLyBkZWZhdWx0IHNoYWRvd1xyXG4gICAgfVxyXG4gICAgZWxzZSBpZiAodHlwZW9mIG9wdHMuc2hhZG93ID09PSAnc3RyaW5nJykge1xyXG4gICAgICAgIHNoYWRvdyA9IG9wdHMuc2hhZG93O1xyXG4gICAgfVxyXG4gICAgdmFyIHNoYWRvd3MgPSBwYXJzZUJveFNoYWRvdyhzaGFkb3cpO1xyXG4gICAgZm9yICh2YXIgaSA9IDA7IGkgPCBvcHRzLmxpbmVzOyBpKyspIHtcclxuICAgICAgICB2YXIgZGVncmVlcyA9IH5+KDM2MCAvIG9wdHMubGluZXMgKiBpICsgb3B0cy5yb3RhdGUpO1xyXG4gICAgICAgIHZhciBiYWNrZ3JvdW5kTGluZSA9IGNzcyhkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKSwge1xyXG4gICAgICAgICAgICBwb3NpdGlvbjogJ2Fic29sdXRlJyxcclxuICAgICAgICAgICAgdG9wOiAtb3B0cy53aWR0aCAvIDIgKyBcInB4XCIsXHJcbiAgICAgICAgICAgIHdpZHRoOiAob3B0cy5sZW5ndGggKyBvcHRzLndpZHRoKSArICdweCcsXHJcbiAgICAgICAgICAgIGhlaWdodDogb3B0cy53aWR0aCArICdweCcsXHJcbiAgICAgICAgICAgIGJhY2tncm91bmQ6IGdldENvbG9yKG9wdHMuZmFkZUNvbG9yLCBpKSxcclxuICAgICAgICAgICAgYm9yZGVyUmFkaXVzOiBib3JkZXJSYWRpdXMsXHJcbiAgICAgICAgICAgIHRyYW5zZm9ybU9yaWdpbjogJ2xlZnQnLFxyXG4gICAgICAgICAgICB0cmFuc2Zvcm06IFwicm90YXRlKFwiICsgZGVncmVlcyArIFwiZGVnKSB0cmFuc2xhdGVYKFwiICsgb3B0cy5yYWRpdXMgKyBcInB4KVwiLFxyXG4gICAgICAgIH0pO1xyXG4gICAgICAgIHZhciBkZWxheSA9IGkgKiBvcHRzLmRpcmVjdGlvbiAvIG9wdHMubGluZXMgLyBvcHRzLnNwZWVkO1xyXG4gICAgICAgIGRlbGF5IC09IDEgLyBvcHRzLnNwZWVkOyAvLyBzbyBpbml0aWFsIGFuaW1hdGlvbiBzdGF0ZSB3aWxsIGluY2x1ZGUgdHJhaWxcclxuICAgICAgICB2YXIgbGluZSA9IGNzcyhkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKSwge1xyXG4gICAgICAgICAgICB3aWR0aDogJzEwMCUnLFxyXG4gICAgICAgICAgICBoZWlnaHQ6ICcxMDAlJyxcclxuICAgICAgICAgICAgYmFja2dyb3VuZDogZ2V0Q29sb3Iob3B0cy5jb2xvciwgaSksXHJcbiAgICAgICAgICAgIGJvcmRlclJhZGl1czogYm9yZGVyUmFkaXVzLFxyXG4gICAgICAgICAgICBib3hTaGFkb3c6IG5vcm1hbGl6ZVNoYWRvdyhzaGFkb3dzLCBkZWdyZWVzKSxcclxuICAgICAgICAgICAgYW5pbWF0aW9uOiAxIC8gb3B0cy5zcGVlZCArIFwicyBsaW5lYXIgXCIgKyBkZWxheSArIFwicyBpbmZpbml0ZSBcIiArIG9wdHMuYW5pbWF0aW9uLFxyXG4gICAgICAgIH0pO1xyXG4gICAgICAgIGJhY2tncm91bmRMaW5lLmFwcGVuZENoaWxkKGxpbmUpO1xyXG4gICAgICAgIGVsLmFwcGVuZENoaWxkKGJhY2tncm91bmRMaW5lKTtcclxuICAgIH1cclxufVxyXG5mdW5jdGlvbiBwYXJzZUJveFNoYWRvdyhib3hTaGFkb3cpIHtcclxuICAgIHZhciByZWdleCA9IC9eXFxzKihbYS16QS1aXStcXHMrKT8oLT9cXGQrKFxcLlxcZCspPykoW2EtekEtWl0qKVxccysoLT9cXGQrKFxcLlxcZCspPykoW2EtekEtWl0qKSguKikkLztcclxuICAgIHZhciBzaGFkb3dzID0gW107XHJcbiAgICBmb3IgKHZhciBfaSA9IDAsIF9hID0gYm94U2hhZG93LnNwbGl0KCcsJyk7IF9pIDwgX2EubGVuZ3RoOyBfaSsrKSB7XHJcbiAgICAgICAgdmFyIHNoYWRvdyA9IF9hW19pXTtcclxuICAgICAgICB2YXIgbWF0Y2hlcyA9IHNoYWRvdy5tYXRjaChyZWdleCk7XHJcbiAgICAgICAgaWYgKG1hdGNoZXMgPT09IG51bGwpIHtcclxuICAgICAgICAgICAgY29udGludWU7IC8vIGludmFsaWQgc3ludGF4XHJcbiAgICAgICAgfVxyXG4gICAgICAgIHZhciB4ID0gK21hdGNoZXNbMl07XHJcbiAgICAgICAgdmFyIHkgPSArbWF0Y2hlc1s1XTtcclxuICAgICAgICB2YXIgeFVuaXRzID0gbWF0Y2hlc1s0XTtcclxuICAgICAgICB2YXIgeVVuaXRzID0gbWF0Y2hlc1s3XTtcclxuICAgICAgICBpZiAoeCA9PT0gMCAmJiAheFVuaXRzKSB7XHJcbiAgICAgICAgICAgIHhVbml0cyA9IHlVbml0cztcclxuICAgICAgICB9XHJcbiAgICAgICAgaWYgKHkgPT09IDAgJiYgIXlVbml0cykge1xyXG4gICAgICAgICAgICB5VW5pdHMgPSB4VW5pdHM7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGlmICh4VW5pdHMgIT09IHlVbml0cykge1xyXG4gICAgICAgICAgICBjb250aW51ZTsgLy8gdW5pdHMgbXVzdCBtYXRjaCB0byB1c2UgYXMgY29vcmRpbmF0ZXNcclxuICAgICAgICB9XHJcbiAgICAgICAgc2hhZG93cy5wdXNoKHtcclxuICAgICAgICAgICAgcHJlZml4OiBtYXRjaGVzWzFdIHx8ICcnLFxyXG4gICAgICAgICAgICB4OiB4LFxyXG4gICAgICAgICAgICB5OiB5LFxyXG4gICAgICAgICAgICB4VW5pdHM6IHhVbml0cyxcclxuICAgICAgICAgICAgeVVuaXRzOiB5VW5pdHMsXHJcbiAgICAgICAgICAgIGVuZDogbWF0Y2hlc1s4XSxcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuICAgIHJldHVybiBzaGFkb3dzO1xyXG59XHJcbi8qKlxyXG4gKiBNb2RpZnkgYm94LXNoYWRvdyB4L3kgb2Zmc2V0cyB0byBjb3VudGVyYWN0IHJvdGF0aW9uXHJcbiAqL1xyXG5mdW5jdGlvbiBub3JtYWxpemVTaGFkb3coc2hhZG93cywgZGVncmVlcykge1xyXG4gICAgdmFyIG5vcm1hbGl6ZWQgPSBbXTtcclxuICAgIGZvciAodmFyIF9pID0gMCwgc2hhZG93c18xID0gc2hhZG93czsgX2kgPCBzaGFkb3dzXzEubGVuZ3RoOyBfaSsrKSB7XHJcbiAgICAgICAgdmFyIHNoYWRvdyA9IHNoYWRvd3NfMVtfaV07XHJcbiAgICAgICAgdmFyIHh5ID0gY29udmVydE9mZnNldChzaGFkb3cueCwgc2hhZG93LnksIGRlZ3JlZXMpO1xyXG4gICAgICAgIG5vcm1hbGl6ZWQucHVzaChzaGFkb3cucHJlZml4ICsgeHlbMF0gKyBzaGFkb3cueFVuaXRzICsgJyAnICsgeHlbMV0gKyBzaGFkb3cueVVuaXRzICsgc2hhZG93LmVuZCk7XHJcbiAgICB9XHJcbiAgICByZXR1cm4gbm9ybWFsaXplZC5qb2luKCcsICcpO1xyXG59XHJcbmZ1bmN0aW9uIGNvbnZlcnRPZmZzZXQoeCwgeSwgZGVncmVlcykge1xyXG4gICAgdmFyIHJhZGlhbnMgPSBkZWdyZWVzICogTWF0aC5QSSAvIDE4MDtcclxuICAgIHZhciBzaW4gPSBNYXRoLnNpbihyYWRpYW5zKTtcclxuICAgIHZhciBjb3MgPSBNYXRoLmNvcyhyYWRpYW5zKTtcclxuICAgIHJldHVybiBbXHJcbiAgICAgICAgTWF0aC5yb3VuZCgoeCAqIGNvcyArIHkgKiBzaW4pICogMTAwMCkgLyAxMDAwLFxyXG4gICAgICAgIE1hdGgucm91bmQoKC14ICogc2luICsgeSAqIGNvcykgKiAxMDAwKSAvIDEwMDAsXHJcbiAgICBdO1xyXG59XHJcbiJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./node_modules/spin.js/spin.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/scripts.js");
/******/ 	
/******/ })()
;