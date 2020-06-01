import React from 'react';
import ReactDOM from 'react-dom';

import { BrowserRouter, Route, Link } from "react-router-dom";

import Search from './Search';

const App = ({history}) => {
    return (
        <BrowserRouter history={history}>
            <Route
                exact
                strict
                path='/'
                component={({ match, history })=> (
                    <Search match={match} history={history} />
                )}
            />
        </BrowserRouter>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
