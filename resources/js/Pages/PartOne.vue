<template>
    <Head title="Part 1" />
    <Layout>
        <Card
            header="Kamma Holding Text"
            sub-header="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus orci ut malesuada
                fringilla. Phasellus et sem blandit, sollicitudin tortor ut, vulputate elit."
            cta-text="Read more about how we work"
            cta-url="#"
        >
            <div class="prose max-w-none">
                <p>Quisque a enim non arcu imperdiet tempus. Class aptent taciti sociosqu ad litora torquent per conubia
                    nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Maecenas et tellus mi. Duis lacinia laoreet justo vitae ultricies. Fusce
                    accumsan tincidunt dolor non accumsan. Proin rhoncus faucibus arcu nec auctor. Vestibulum sit amet
                    orci ligula.</p>
                <p>Sed nec nisl tempus, fringilla mauris ut, eleifend augue. Curabitur ex lacus, malesuada ac finibus
                    id, placerat ut nisl. Donec vehicula tellus ut lorem ultricies tristique. Morbi luctus velit vel
                    feugiat semper. Cras enim quam, porttitor sit amet orci vel, suscipit mattis turpis. Vivamus cursus
                    est eget tortor venenatis tempor. Suspendisse potenti. We're hiring at the moment, to find out more
                    <Link href="#">click here</Link>.</p>
                <p>Nullam neque augue, pretium non orci eget, ullamcorper commodo elit. Sed vitae magna quis libero
                    malesuada interdum id vitae sapien. Sed convallis tortor et eros pulvinar, ac malesuada magna
                    efficitur. Maecenas congue tempus mattis. Praesent rhoncus, lacus et ultricies mollis, tortor sapien
                    cursus nisl, sit amet mattis quam velit in sapien. Cras non augue imperdiet, consectetur massa ut,
                    iaculis dui. Suspendisse id convallis ante.</p>
                <p>Duis sit amet condimentum urna, ac vulputate sapien. Nam ultrices tellus eget neque interdum
                    tincidunt. Donec ultrices at velit nec aliquet. Pellentesque consectetur convallis ullamcorper.
                    Quisque mattis orci lacus, in imperdiet quam malesuada a. Cras id fermentum dui. Etiam felis risus,
                    venenatis vitae blandit at, ultrices non enim. Etiam nec ullamcorper ligula. Pellentesque laoreet
                    tortor sit amet tempor consectetur. Morbi elementum mauris fermentum, semper mi ut, dignissim diam.
                    Donec accumsan est in enim iaculis consequat.</p>
            </div>
        </Card>
    </Layout>
</template>

<script>
import Layout from './Layout'
import { Head, Link } from '@inertiajs/inertia-vue3'
import Card from "../components/Card";

export default {
    components: { Layout, Head, Link, Card },
    props: [],
}
</script>
