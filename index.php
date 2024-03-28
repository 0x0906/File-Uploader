<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'utils.php';
        $token = generateRandomString(100);
        $_SESSION["token"] = $token;
        echo "<meta name=\"token\" content=\"" . $_SESSION["token"] . "\">"
    ?>
    <title>File Uploader</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="overlay">
        <div class="pop">
            <div class="title">
                Terms and services
            </div>
            <div class="caption">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio architecto pariatur natus excepturi beatae nulla nobis, accusamus libero illo id eligendi vero alias neque voluptates magnam! Quaerat voluptatibus iure quae?
                Consequatur, velit! Mollitia labore dolorem recusandae, aperiam maxime at repellendus error magni. Sit dignissimos ullam, veniam error quis rerum quidem? Dolor id temporibus laudantium voluptate repellendus est porro qui provident.
                Nostrum explicabo magni quibusdam, quod inventore provident ipsam sunt veritatis voluptatibus repudiandae amet cum dolor adipisci sed voluptatum porro similique! Magni, quia quis. Laboriosam eligendi, autem fuga repellendus porro perferendis!
                Ratione velit, suscipit non dolor hic nisi necessitatibus perferendis nostrum odit sapiente possimus nemo nulla repellat, sed adipisci, facere cupiditate molestias inventore blanditiis in. Iste hic facilis excepturi? Odit, quis?
                Ut cumque illo doloremque aliquam pariatur quasi. Nemo aliquid minima, doloribus vitae ratione repellat cumque esse maxime et qui quia illum ipsam ipsa expedita, possimus unde harum omnis necessitatibus reprehenderit.
                Qui quos eum quam aspernatur commodi dignissimos minima, optio id placeat expedita reprehenderit reiciendis laboriosam vitae ut, modi earum quas quisquam molestiae aut unde voluptatum quia animi! Tenetur, ab natus?
                Nisi consequatur quia dolorum quod repellendus dolores consectetur expedita modi vel amet corrupti numquam, exercitationem reprehenderit. Reiciendis vero esse corrupti, dicta cumque maiores dolor sunt nihil odio nisi voluptate nulla?
                Repudiandae, dolore! Facere laboriosam earum numquam placeat iste a mollitia, dolore error quod repellat iusto animi ullam quidem amet! Iste excepturi fuga non porro repudiandae voluptates! Voluptatibus ad sequi eveniet!
                Accusamus cum facere id perspiciatis nemo nostrum dolorum sapiente commodi voluptatum ipsa corporis, exercitationem ratione sint porro dolor necessitatibus assumenda debitis temporibus provident voluptates eos non quia fugit. Culpa, fugiat?
                Officiis exercitationem consequuntur sequi esse omnis laboriosam placeat tenetur. Sit, quisquam nihil at deserunt in nisi quo quam. Velit facilis ea laboriosam recusandae neque dolorum ullam beatae quo esse animi?
                Quidem itaque maiores beatae dolor iure, quisquam ducimus totam voluptatibus. A magni ipsum nesciunt minima dolore debitis quod. Vel asperiores beatae recusandae ducimus, soluta optio enim libero sunt quam rem.
                Aperiam quos culpa error distinctio est hic perferendis nisi, ratione voluptatibus. Accusantium quae id doloremque laborum magnam voluptates quam asperiores porro, modi, blanditiis ullam cupiditate fugit, aliquam quia numquam necessitatibus?
                Vel, quidem aliquid? Doloribus recusandae illo, distinctio perspiciatis consequatur dignissimos, cumque magnam dolor pariatur magni voluptatem atque, assumenda totam consequuntur quae corrupti dolore temporibus maiores accusantium possimus unde nostrum quos!
                Officia alias ut odit dicta blanditiis sunt atque, mollitia vitae quas nulla, pariatur quasi molestias corrupti veritatis deserunt magni omnis natus, dolorem qui animi at perferendis. Unde obcaecati vero expedita!
                Quas odit illo fugit unde, facere quaerat laborum, pariatur minus ad expedita, recusandae dolor esse sit non laboriosam quo in cupiditate nihil. Deserunt reprehenderit ad fuga saepe ea sapiente exercitationem.
                Incidunt similique delectus, dolorem explicabo quia, quo exercitationem, reiciendis culpa enim neque ex mollitia natus consectetur aut necessitatibus. Numquam, autem. Ratione, nisi odit tenetur ipsum ex sunt libero porro repellat.
                Explicabo nihil porro commodi facilis a, corrupti libero in nobis voluptas aperiam veniam molestias iste debitis repudiandae quibusdam nostrum minima? Modi quis saepe expedita sequi esse incidunt accusantium ipsum eius?
                Ipsa deleniti tempora error optio assumenda officia facilis cupiditate nostrum? Quod odio rerum debitis nesciunt, natus voluptatem placeat laborum quasi aspernatur, molestias error libero, necessitatibus ipsum ex ipsam inventore esse.
                Excepturi ea, mollitia dolores ut non saepe nesciunt consequuntur, vel optio aut reiciendis iste perspiciatis quibusdam, porro minus ab animi itaque atque praesentium doloribus exercitationem reprehenderit ad quia dolorum! Ex.
                Aliquam dolore quam ipsam quae maiores ea impedit repellat molestias quod soluta doloremque nihil, dolor sunt pariatur dolores enim dolorum quo quaerat explicabo iste labore eum odit? Praesentium, dolor accusamus.
                Asperiores est sint nisi maiores voluptates eos tempora repudiandae, quaerat adipisci delectus laboriosam ex dolor autem voluptate minus voluptatum? In pariatur atque illo ex, quod recusandae quis cupiditate nesciunt repellat.
                Quia unde, harum quidem eos molestiae ratione rem fuga consequuntur assumenda sint quod, explicabo commodi enim laborum neque consequatur distinctio beatae dignissimos dolores laudantium omnis reprehenderit expedita corporis? Ratione, assumenda.
                Odit, provident consectetur iste vel harum deleniti magni beatae pariatur quo quisquam veritatis debitis nisi iusto earum doloremque sunt consequuntur officia repellendus quos cumque quia facilis tempora eaque ratione! Iure.
                Aperiam cupiditate deleniti, similique non quod doloribus voluptatum quasi mollitia dolores quos totam earum, sed libero eligendi ab eos amet nobis! Aspernatur libero nihil, iusto saepe numquam quidem distinctio modi!
                Distinctio impedit laboriosam est itaque, placeat corporis dolore dolorem quas laudantium nisi rem quam! Odio debitis recusandae natus accusantium consequuntur totam quidem? Minus eos placeat ullam perspiciatis blanditiis, numquam recusandae.
                Voluptates adipisci illum porro minima saepe id vitae atque fuga quia numquam nihil earum odio, omnis iure repellat eaque, blanditiis labore. Officia ad iure pariatur! Ducimus iusto minus assumenda aut!
                Doloribus saepe dolor, cum commodi officiis quae excepturi velit odit error impedit perferendis culpa facilis sed distinctio blanditiis eveniet libero tenetur voluptates beatae! Beatae illo placeat hic voluptatem. Hic, sint.
                Nesciunt, assumenda doloribus fugit sit deleniti aliquid labore, nemo blanditiis voluptatem soluta reiciendis officia. Quo velit sed laudantium vero reprehenderit reiciendis dolorum architecto ut soluta quae? Architecto alias ipsam nisi!
                Doloremque quod minus voluptatibus ea nisi atque accusamus eligendi rerum. Ullam, ipsum labore repellat commodi nihil nisi et architecto fugiat culpa voluptatibus sint dicta vel, facere obcaecati autem, quisquam nobis!
                Ea officiis, totam est explicabo accusantium nulla ratione officia facere assumenda aliquam deleniti ad praesentium illum architecto itaque vel laboriosam id soluta fuga! Ea debitis asperiores possimus recusandae excepturi maxime?
                Est expedita nisi iusto at quidem. Tempore eveniet culpa quasi ut, saepe ad molestias voluptates. Nesciunt, possimus culpa, amet voluptatem dolore distinctio vero facere nobis quisquam earum nisi, cupiditate impedit.
                Nobis enim odit nemo non animi dolorem, exercitationem error pariatur doloremque quo quae doloribus alias, nisi perspiciatis quis magnam ducimus aliquam ab veniam nostrum! Dolores voluptatum tempora repellendus ipsam vitae.
                Exercitationem consequuntur ad voluptas saepe fugiat. Molestias, dignissimos odio quisquam esse dolorum, cumque voluptatibus omnis exercitationem autem enim tempora. Atque, ad itaque explicabo in nihil maxime saepe corrupti vitae quas.
                Cumque dolor nisi assumenda amet quam laboriosam facilis commodi. Sed officia mollitia debitis eligendi in, cum animi, distinctio perspiciatis odio impedit fugiat dolore, possimus dignissimos praesentium deserunt. Temporibus, labore harum?
                Explicabo alias, quisquam excepturi quae quam ab similique sequi officia eveniet cumque architecto aperiam maxime, sit quibusdam? Repudiandae, ad facilis! Numquam dignissimos in incidunt velit nam quo quia dicta accusantium.
                Nisi dicta quo fugiat quidem! Hic porro, necessitatibus ut expedita, ab architecto blanditiis sint officia rerum consectetur iste dolore quaerat minima quisquam excepturi vitae laudantium voluptas. Nemo eligendi obcaecati aliquid.
                Deleniti maxime reprehenderit quod, debitis nobis atque ea quis suscipit magnam perspiciatis? Iste voluptas voluptatem ut cum harum numquam adipisci eligendi! Aut sapiente similique odit harum dignissimos perspiciatis, quia omnis.
                Optio nobis omnis ea eaque, officiis reiciendis laudantium voluptate deserunt illum sapiente architecto vero perferendis, consequuntur harum quaerat praesentium blanditiis debitis rem nesciunt voluptatum, voluptas corrupti nam. Vero, labore earum?
                Vel laudantium aut ut quis cumque atque laboriosam asperiores impedit cupiditate veritatis amet veniam architecto nisi quibusdam, quod, error quia ipsum voluptatem ipsam commodi facilis maxime libero. Tempora, similique repellat!
                Voluptas aliquid at aliquam fuga modi sit maxime, accusantium voluptatibus amet omnis illo nam recusandae doloribus repudiandae quaerat molestias exercitationem quasi perferendis saepe? Nostrum natus minus eligendi aperiam, debitis eius.
                Quaerat eligendi cupiditate aspernatur laborum nemo modi aliquid eius, voluptatibus est quasi consectetur quisquam illo esse aut atque enim! Dolorum sit in eaque officiis placeat fuga, labore deserunt veniam iure!
                Fugit exercitationem suscipit earum nostrum error, molestias, sit expedita odio eum dolorum tenetur atque dicta accusantium placeat labore est libero amet neque asperiores, quod sunt natus? Delectus velit deserunt consequuntur?
                Unde distinctio, recusandae voluptates repellendus iure sequi dolor libero deleniti? Iusto perspiciatis ipsa odit, commodi dolorem doloribus. Laudantium, perspiciatis voluptatibus nam, cumque, velit beatae numquam voluptates quo illum corrupti odio!
                Enim suscipit, dolor pariatur quisquam odit accusamus qui cupiditate provident laboriosam porro saepe eum rem, accusantium culpa atque voluptatem! Animi, porro deserunt. Ab, laudantium quos. Officiis dolorem voluptatum labore alias?
                Fugiat est provident sit beatae, magni possimus dolorum sunt perferendis ab fuga iste cum praesentium placeat rerum quibusdam voluptatibus! Atque possimus ipsum perspiciatis, aperiam cupiditate eligendi nulla vitae nihil voluptas?
                Maiores ducimus qui delectus ad nisi perspiciatis quis nesciunt magnam expedita reprehenderit non nemo repellat ipsum odio sunt asperiores doloribus, eveniet sed temporibus iure magni et omnis quasi. Laboriosam, tempora!
                Voluptatem veritatis enim vitae ullam doloremque id. Laborum molestiae consectetur harum, rem sit hic perspiciatis consequatur, vitae maiores esse est ut ducimus blanditiis culpa. Consectetur consequatur ad ut maxime suscipit.
                Eum facere quibusdam delectus architecto veniam sapiente, consequatur repellat facilis accusamus optio saepe? Harum, odio doloribus. Consequuntur tenetur iure delectus itaque dolores, eaque nihil voluptatibus, culpa fugit autem voluptatum ipsum.
                Pariatur dignissimos eos alias. Nulla culpa facere vitae dicta praesentium. Laudantium, delectus. Totam dicta similique facilis laboriosam excepturi, aut labore voluptatibus maxime, veniam fugit debitis nesciunt neque? Vitae, rerum debitis?
                Vitae labore dicta voluptatibus pariatur autem alias delectus, neque laborum in, accusamus quae maxime est, qui eius a veniam. Pariatur enim exercitationem sit iure natus optio explicabo ipsam ut recusandae.
            </div>
            <div class="btns">
                <div class="cancel" onclick="PopResponse(false)">
                    Decline
                </div>
                <div class="ok" onclick="PopResponse(true)">
                    Agree
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="info">
            <h2><span id="notify">Upload a file up to 20 MB</span> and get a direct download link</h4>
            <h4>Your file is only available for one month from when you uploaded it</h6>
            </div>

        <div class="response-container">
            <img class="response-img" src="" width="100px" height="100px">
            <h3 class="response-text"></h3>
            <div class="response-server-container">
                <div class="response-server-message"></div> 
            </div>
            <div class="response-copy-btn" onclick="copyreponse()">
                Copy
            </div>
            <div class="response-goback-btn" onclick="goback()">
                Go back
            </div>
        </div>
        
         <div class="upload-container">
            <h4><span onclick="OpenFileDialog()">Select</span> or Drag and drop your file here</h4>
            <img class="upload-img" onclick="OpenFileDialog()" src="/img/icons8-upload-file-64.png" width="100px" height="100px"  alt="">
            <div class="file-info-container">
                <div class="close-btn" onclick="closefileinfo()">
                    x
                </div>
                <div class="file-info">
                    <h5 class="file-info-lbl">File name: </h5>
                    <div class="scroll-text">
                        <span class="file-info-val"></span>
                    </div>
                </div>
                <div class="file-info">
                    <h5 class="file-info-lbl">File size: </h5>
                    <div class="scroll-text">
                        <span class="file-info-val"></span>
                    </div>
                </div>
                <div class="file-info">
                    <h5 class="file-info-lbl">File type: </h5>
                    <div class="scroll-text">
                        <span class="file-info-val"></span>
                    </div>
                </div>
            </div>
            <div class="upload-btn" onclick="upload()">
                <span class="upload-btn-text">Upload</span>
                <div class="upload-btn-progress"></div> 
            </div>
            <input type="file" id="file-input" style="display: none;"/>
        </div> 
        <div class="coded-by">Presented by **** and ****</div>
    </div>
    
<script src="script.js"></script>
</body>
</html>