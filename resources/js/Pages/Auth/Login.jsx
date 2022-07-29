import React, { useEffect } from 'react';
import Button from '@/Components/Button';
import Checkbox from '@/Components/Checkbox';
import Guest from '@/Layouts/Guest';
import Input from '@/Components/Input';
import Label from '@/Components/Label';
import ValidationErrors from '@/Components/ValidationErrors';
import { Head, Link, useForm } from '@inertiajs/inertia-react';

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: '',
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const onHandleChange = (event) => {
        setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
    };

    const submit = (e) => {
        e.preventDefault();

        post(route('login'));
    };

    return (
        <Guest>
            <Head title="Log in" />

            <div className="Box Box--spacious col-xl-3 col-sm-12 col-md-6 col-lg-4 mx-auto">

                <div className="Box-header">
                    <h3 className="f1-light">
                        Login
                    </h3>
                </div>

                <form onSubmit={submit}>

                    <div className="Box-body">

                        {status && <div className="flash mt-3 flash-error">{status}</div>}

                        <div className={`form-group ${errors.email ? 'errored': ''}`}>
                            <div className="form-group-header">
                                <Label forInput="email" value="Email Address" />
                            </div>

                            <div className="form-group-body">

                                <Input
                                    type="text"
                                    name="email"
                                    value={data.email}
                                    autoComplete="username"
                                    isFocused={true}
                                    handleChange={onHandleChange}
                                    aria-describedby="email-input-validation"
                                />

                                {
                                    errors.email && <p className="note error" id="email-input-validation">{errors.email}</p>
                                }
                            </div>
                        </div>

                        <div className={`form-group ${errors.password ? 'errored': ''}`}>
                            <div className="form-group-header">
                                <Label className="flex-auto" forInput="password" value="Password" />
                            </div>

                            <div className="form-group-body">
                                <Input
                                    type="password"
                                    name="password"
                                    value={data.password}
                                    autoComplete="current-password"
                                    handleChange={onHandleChange}
                                    aria-describedby="password-input-validation"
                                />

                                {
                                    errors.password && <p className="note error" id="password-input-validation">{errors.password}</p>
                                }
                            </div>
                        </div>
                    </div>

                    <div className="Box-footer">
                        <Button className="btn btn-primary btn-block" processing={processing}>
                            Log in
                        </Button>
                        {canResetPassword && (
                            <Link
                                href={route('password.request')}
                                className="ml-2"
                            >
                                Forgot your password?
                            </Link>
                        )}
                    </div>
                </form>
            </div>
        </Guest>
    );
}
