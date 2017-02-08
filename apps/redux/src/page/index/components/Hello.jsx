import React, { PropTypes } from 'react';

const Hello = ({ name }) => (
  <div>
    Hello { name }
  </div>
);

Hello.propTypes = {
  name: PropTypes.string.isRequired,
};

export default Hello;
