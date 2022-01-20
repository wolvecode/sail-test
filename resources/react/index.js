import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route } from "react-router-dom";
import LoginApp from "./login";
import Home from "./pages/Home";

function App() {
    return (
        <div className="container">
            <Router>
                <Route path="/"  exact={true} component={Home}/>
                <Route exact path="/login"  exact={true} component={LoginApp}/>
            </Router>
        </div>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
