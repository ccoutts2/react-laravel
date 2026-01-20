import { Container } from '@/components/Container copy';
import { Header } from '@/components/Header';
import { NewPuppyForm } from '@/components/NewPuppyForm';
import { PageWrapper } from '@/components/PageWrapper';
import { PuppiesList } from '@/components/PuppiesList';
import { Search } from '@/components/Search';
import { Shortlist } from '@/components/Shortlist';

import { Filters, PaginatedResponse, Puppy, SharedData } from '@/types';
import { usePage } from '@inertiajs/react';
import { useRef } from 'react';

export default function App({
    puppies,
    filters,
    likedPuppies,
}: {
    puppies: PaginatedResponse<Puppy>;
    filters: Filters;
    likedPuppies: Puppy[];
}) {
    const { auth } = usePage<SharedData>().props;
    const mainRef = useRef<HTMLElement | null>(null);

    return (
        <PageWrapper>
            <Container>
                <Header />
                <main ref={mainRef} className="scroll-mt-6">
                    <div className="mt-24 grid gap-8 sm:grid-cols-2">
                        <Search filters={filters} />
                        {auth.user && <Shortlist puppies={likedPuppies} />}
                    </div>
                    <PuppiesList puppies={puppies} />
                    {auth.user && <NewPuppyForm mainRef={mainRef} />}
                </main>
            </Container>
        </PageWrapper>
    );
}
