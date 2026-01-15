import { login, logout } from '@/routes';
import { SharedData } from '@/types';
import { Link, usePage } from '@inertiajs/react';

export function Header() {
    const { auth } = usePage<SharedData>().props;

    return (
        <header>
            {/* Logo */}
            <div className="flex items-center justify-between">
                <a className="group" href="/">
                    <img
                        src="/images/pixel-logo.png"
                        alt="DevPups"
                        className="h-16 transition group-hover:scale-105 group-hover:-rotate-6 md:h-20"
                    />
                    <p className="text-lg font-semibold">Dev Pups</p>
                </a>
                {auth.user ? (
                    <div className="flex items-center gap-4">
                        <p>Hi, {auth.user.name}!</p>

                        <Link method="post" href={logout()}>
                            Log out
                        </Link>
                    </div>
                ) : (
                    <Link href={login()}>Log in</Link>
                )}
            </div>
            {/* Hero copy */}
            <div className="mt-6">
                <h1 className="text-lg font-bold">
                    We've got the best puppies!
                </h1>
                <p className="text-slate-600">
                    Don't take our word — let the pictures do the talking :)
                </p>
                {!auth.user && (
                    <p className="mt-6 text-slate-600">
                        <Link className="underline" href={login()}>
                            Sign in
                        </Link>{' '}
                        to keep track of your favourite puppies and add new
                        ones!
                    </p>
                )}
            </div>
        </header>
    );
}
