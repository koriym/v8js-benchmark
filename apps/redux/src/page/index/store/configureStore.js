import { createStore } from 'redux';
import rootReducer from '../reducers';

const configureStore = state => (
  createStore(
    rootReducer,
    state,
  )
);

export default configureStore;
