<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('My Messages')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">


                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <?php if($count > 0): ?>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption
                            class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            My Messages
                            <p class="mt-1 text-sm font-normal  text-gray-500 dark:text-gray-400">Browse a list of
                                These are the messages that you have sent to <?php echo e(env('APP_NAME')); ?>, Please note that your messages
                                are of great value to the Company developent and we really do the hard work to make sure
                                your opinions are being processed and whatever is in our capability is done, thank you!
                            </p>
                            <p class="mt-1 text-sm font-bold text-gray-500 dark:text-gray-400">Message Sent
                                By: <?php echo e(Auth::user()->name); ?><br>Email: <?php echo e(Auth::user()->email); ?></p>
                            <p class="mt-1 text-sm font-bold text-gray-500 dark:text-gray-400">Total Messages:
                                <?php echo e($count); ?>

                            </p>

                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sent On
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Subject
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Delete</span>
                                </th>
                                <!-- <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Delete</span>
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo e($loop->iteration); ?>

                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo e($item->created_at->format('D, F d, Y')); ?>

                                </th>
                                <td class="px-6 py-4">
                                    <?php echo e($item->subject); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <a href="<?php echo e(route('mymessages.show', $item->id)); ?>"
                                        class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">View</a>
                                </td>
                                <!-- <td class="px-6 py-4 text-right">
                                    <a href="<?php echo e(route('mymessages.destroy', $item->id)); ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                </td> -->
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="px-4 py-2"><?php echo e($message->links()); ?></div>
                    <?php else: ?>
                    <p class="my-10 mx-20 text-md text-center font-bold text-gray-500 dark:text-gray-400">You currently
                        have not
                        sent any message to the Techclouds Team, You can not view any message for now.<br>To send
                        message go to <a href="/contact"
                            class="text-white bg-slate-500 rounded-md  px-2 py-1 hover:bg-slate-600 ">our Messaging
                            System</a> to send message</p>
                    <?php endif; ?>
                </div>



            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\Projects\company-web-system\resources\views/site/jetstream/messages/messages.blade.php ENDPATH**/ ?>