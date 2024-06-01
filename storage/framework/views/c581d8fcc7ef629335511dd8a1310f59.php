<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        Author
         <?php $__env->endSlot(); ?>
    <?php if (isset($component)) { $__componentOriginal9e79cd15ec5b5957133f9c0a985abe76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76)): ?>
<?php $attributes = $__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76; ?>
<?php unset($__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e79cd15ec5b5957133f9c0a985abe76)): ?>
<?php $component = $__componentOriginal9e79cd15ec5b5957133f9c0a985abe76; ?>
<?php unset($__componentOriginal9e79cd15ec5b5957133f9c0a985abe76); ?>
<?php endif; ?>
    <div class="container authorPage">
        <link rel="stylesheet" href="<?php echo e(asset('css/authorPage.css')); ?>">
        <h1>AUTHOR</h1>
        <h2>Marjona Urinboyeva</h2>
        <p>"Let's make this world beautiful at least one million people together."</p>
        <h3  class="aboutTitle">About me</h3>
        <div class="message">
            <p class="honestMeUzb">“Assalomu alaykum, friends! Welcome to my world. Here, I am on a mission to spread positivity and personal growth through my writings. As an IELTS instructor, finance enthusiast, and psychology aficionado, I bring a unique perspective to the topics I explore.
                My goal is to inspire and empower readers, guiding them on their journeys of self-discovery and language mastery. Whether you're curious about human nature, seeking personal development such as lifelong learning, discipline, persistence, IELTS writing, or simply have a passion for literature, you'll find something to scratch your interest on this site. By the way, for the people who have interest in my life, I will also share some personal stories that brought me here today!”</p>
            <p class="honestMe">“Honest Me!!! I am not the one who is a great or billionaire. I am not a filmmaker, nor a singer/dancer. BTW, I am not the boss of any corporation. Who I am then? Ready to explore: the favorite daughter of a supportive family, a believed leader of some/many, quite religious, highly persuasive, and a boss of her own life. Explorist of the experiences of others with strong observation skills. The preferred type of public behavior is introvert. Loves exploring different businesses, but is NOT INVOLVED in everyone’s business.
                Now great news…!!! I have something, mystery that can make you curious. Do you wanna know the secrets and mysteries of life that made people successful? We will explore it together! Taadamm! So boring…, right? Yeah! Quite dumped! But deep down, as you follow my posts, you will find many written pages that assist you in bombarding your self-consciousness and the nature of others. I hope you will interpret those findings into your own life and make them useful."
                "My teachers… During my apprenticeship, whenever I tell them about my plans, they always question, how useful that works for others. I did writing for three years, but I had to give up all three years of effort, cause I found nothing useful more than just written stories influenced by emotions. But today, after two years of not taking a pen to a hand, finally I am able to turn my ability and effort into something really useful to others. From now on, I will post useful and highly efficient tactics, and experiences that can find its proof in your life. They are deep thoughts, so read them with your deep kind heart.
                Thank you…,"</p>
            <div style="display: flex; justify-content: center">
                <a href="https://www.linkedin.com/in/janedoe" style="margin-right: 15px; color: #007bff;" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                <a href="https://t.me/yourtelegramusername" style="color: #007bff;" target="_blank"><i class="fab fa-telegram"></i> Telegram</a>
            </div>
        </div>

        <div class="credentialsSection">
            <div class="quote">
                <img src="<?php echo e(asset('images/aboutPage/img_10.png')); ?>" alt="quote">
                <h4>Status quo: “Be water, my friend!”-Bruce Lee</h4>
            </div>



















            <div class="activities" style="margin-top: 100px">
                <div>
                    <img src="<?php echo e(asset('images/aboutPage/img_6.png')); ?>" alt="act">
                    <img src="<?php echo e(asset('images/aboutPage/img_7.png')); ?>" alt="act">
                    <img src="<?php echo e(asset('images/aboutPage/img_8.png')); ?>" alt="act">
                    <img src="<?php echo e(asset('images/aboutPage/img_9.png')); ?>" alt="act">
                </div>
                <div>
                    <p>Activities: Gymnastic, dancing, ping-pong, meditation</p>
                    <p>Preferred activities: reading, writing, sleeping.</p>
                </div>

            </div>
        </div>
    </div>


    <?php if (isset($component)) { $__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68)): ?>
<?php $attributes = $__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68; ?>
<?php unset($__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68)): ?>
<?php $component = $__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68; ?>
<?php unset($__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Asus\Desktop\NoName\Personal\resources\views/home/authorPage.blade.php ENDPATH**/ ?>