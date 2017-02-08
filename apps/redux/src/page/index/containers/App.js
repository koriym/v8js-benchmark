import { connect } from 'react-redux';
import { hello } from '../actions';
import Hello from '../components/Hello';

const mapStateToProps = state => ({
  name: state.hello.name,
});

const App = connect(
  mapStateToProps,
)(Hello);

export default App;
