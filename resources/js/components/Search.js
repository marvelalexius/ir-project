import React from 'react';

import { withRouter } from 'react-router-dom';

const [textSearch, setTextSearch]

const _submit = (e) => {
    e.preventDefault();

}

const Search = () => {
    return (
        <div className="container">
            <form className="form" onSubmit={_submit()}>
                <div className="row justify-content">
                    <div className="col-lg-10">
                        <input
                            className="form control form-control-sm"
                            placeholder="Search"
                        />
                    </div>
                    <div className="col-lg-2">
                        <button className="btn btn-primary form-control" type="submit">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    );
}

export default withRouter(Search);
