<?php $this->layout("layouts/home", ["title" => "Your profile"]) ?>

<?php $this->start("page");
$timestamp = strtotime($user_data["created_at"]);
$currentDate = strtotime(date('Y-m-d'));
$hour = ceil(($currentDate - $timestamp) / 3600);

?>
<i class="fa-solid fa-arrow-left ml-4 "></i> <a href="/" class="font-bold transition-all duration-300 hover:text-[#4169E1] text-[20px]">Home</a>
<div class="w-[95%] min-h-screen mx-auto mt-3 mb-36">

    <?php if (isset($success)) {

    ?><div id="success-notification" class="bg-green-500 text-white px-4 py-2 fixed top-0 right-0 m-4 rounded-md shadow-lg animate__animated animate__backInRight">
            <p class="font-bold"><i class="fa-solid fa-check"></i> Success</p>
            <p><?php echo $success; ?></p>
        </div> <?php } ?>
    <div class="relative h-[300px] w-full bg-center bg-cover rounded-sm" style="
            background-image: url('./assets/aviv-rachmadian-7F7kEHj72MQ-unsplash.jpg');
          ">

        <div class="w-[90%] bg-[#fdfdfd] h-[500px] absolute top-32 left-[50%] translate-x-[-50%] mx-auto shadow-lg rounded-md pt-[50px] px-10">
            <div style="<?php
                        if (isset($user_data["image"])) {
                            echo "background-image:url('" . $user_data['image'] . "')";
                        } else {
                            echo "background-image:url('./assets/user_avatar.jpg')";
                        }
                        ?>" class="w-[100px] h-[100px] rounded-full shadow-lg absolute left-1/2 translate-x-[-50%] -top-[50px] bg-center bg-cover">

            </div>
            <div class="flex justify-between items-center px-24">
                <ul class="flex gap-x-6">
                    <li class="flex flex-col items-center"><span class="font-bold text-lg text-[#4169e1]"><?php echo $amountoforder ?></span><span class="text-slate-400">Ordered</span></li>
                    <li class="flex flex-col items-center"><span class="font-bold text-lg text-[#4169e1]"><?php echo  $hour ?></span><span class="text-slate-400">Hours</span></li>
                </ul>
                <a href="/editprofile" class="px-5 py-2 bg-[#4169e1] rounded-md font-bold text-white">EDIT PROFILE</a>
            </div>
            <div class="text-center mt-12">
                <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700">
                    <?= htmlspecialchars($user_data["name"]) ?>
                </h3>
                <div class="text-sm leading-normal mt-0 mb-2 text-slate-400 font-bold uppercase">
                    <i class="fa-regular fa-envelope"></i></i>
                    <?= htmlspecialchars($user_data["email"]) ?>
                </div>
                <div class="mb-2 text-blueGray-600 mt-10">
                    <i class="fa-solid fa-location-pin mr-2 text-lg text-slate-400"></i> <?= htmlspecialchars($user_data["address"]) ?>

                </div>
                <div class="mb-2 text-blueGray-600">
                    <i class="fa-solid fa-phone mr-2 text-lg text-slate-400"></i> <?= htmlspecialchars($user_data["phone"]) ?>
                </div>
                <hr />
                <div class="mt-5">
                    <p>
                        An artist of considerable range, Jenna the name taken by Melbourne-raised, Brooklyn-based Nick Murphy writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>