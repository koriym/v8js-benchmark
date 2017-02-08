import greeting from '../template/greeting.handlebars';

global.render = state => (
  greeting(state)
)
