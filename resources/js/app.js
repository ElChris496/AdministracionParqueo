import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Use PORT provided in environment or default to 3000
var port = process.env.PORT || 3000;

// Listen on `port` and 0.0.0.0
app.listen(port, '0.0.0.0', function () {
  // ...
});