import { like } from '@/routes/puppies';
import { Link, usePage } from '@inertiajs/react';
import clsx from 'clsx';
import { Heart, LoaderCircle } from 'lucide-react';
import { Puppy, SharedData } from '../types';

export function LikeToggle({ puppy }: { puppy: Puppy }) {
    const { auth } = usePage<SharedData>().props;

    return (
        <Link
            method="patch"
            preserveScroll
            href={like(puppy.id)}
            className={clsx('group', !auth.user && 'cursor-not-allowed')}
            disabled={!auth.user}
        >
            <LoaderCircle className="hidden animate-spin stroke-slate-300 group-data-loading:block" />
            <Heart
                className={clsx(
                    auth.user &&
                        puppy.likedBy.includes(auth.user.id) &&
                        auth.user
                        ? 'block fill-pink-500 stroke-none group-data-loading:hidden'
                        : 'stroke-slate-200 group-hover:stroke-slate-300 group-data-loading:hidden',
                )}
            />
        </Link>
    );
}
