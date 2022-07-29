import React from 'react';

export default function Button({ type = 'submit', className = '', processing, children }) {
    return (
        <button
            type={type}
            className="btn btn-primary"
            disabled={processing}
        >
            {children}
        </button>
    );
}
