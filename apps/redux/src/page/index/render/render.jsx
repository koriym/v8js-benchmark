import React from 'react';
import { renderToString } from 'react-dom/server';
import { Provider } from 'react-redux';
import App from '../containers/App';
import configureStore from '../store/configureStore';

const render = (state) => {
  const store = configureStore(state);
  const root = renderToString(
    <Provider store={store}>
      <App />
    </Provider>,
  );

  return root;
};

export default render;
