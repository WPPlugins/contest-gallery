<?php

$checkLanguage = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$checkLanguage = substr($checkLanguage,0,2); 

if($checkLanguage=='de'){
	
$language_SortBy = "Sortieren";
$language_Comments = "Kommentare";
$language_VoteFirst = "Bewerte";
$language_ThumbView = "Thumb Ansicht";
$language_HeightView = "Alle Bilder gleiche Höhe";
$language_RowView = "Gleiche Anzahl an Bildern in einer Reihe";
$language_RandomSortSorting = "Zufällig";
$language_DateDescend = "Datum absteigend";
$language_DateAscend = "Datum aufsteigend";
$language_CommentsDescend = "Kommentare absteigend";
$language_CommentsAscend = "Kommentare aufsteigend";
$language_RatingDescend = "Bewertungen absteigend";
$language_RatingAscend = "Bewertungen aufsteigend";
$language_FullSize = "Volle Größe";
$language_PictureComments = "Kommentare zum Bild";
$language_YourComment = "Dein Kommentar";
$language_Name = "Name";
$language_Comment = "Kommentar";
$language_IamNotArobot = "Ich bin kein Bot";
$language_Send = "Senden";
$language_TheNameFieldMustContainTwoCharactersOrMore = "Der Name muss länger als zwei Buchstaben sein";
$language_TheCommentFieldMustContainThreeCharactersOrMore = "Der Kommentar muss länger als drei Buchstaben sein";
$language_PlzCheckTheCheckboxToProveThatYouAreNotArobot = "Bitte Häckchen setzten um zu zeigen, dass Sie kein Bot sind";
$language_ThankYouForYourComment = "Danke für dein Kommentar";
$language_YouHaveAlreadyVotedThisPicture = "Du hast für dieses Bild bereits abgestimmt";
$language_AllVotesUsed = "Du hast all deine Stimmen verbraucht";
$language_OnlyRegisteredUsersCanVote = "Nur registrierte User dürfen bewerten";
$language_BackToGallery = "Zurück zur Galerie";
$language_ThisFileTypeIsNotAllowed = "Dieser File Typ ist nicht erlaubt";
$language_TheFileYouChoosedIsToBigMaxAllowedSize = "Die Datei die Sie gewählt haben ist zu groß. Maximal erlaubte Größe";
$language_TheResolutionOfThisPicIs = "Die Auflösung des Bildes ist";

$language_BulkUploadQuantityIs = "Maximale Anzahl der Bilder für ein Upload ist";
$language_BulkUploadLowQuantityIs = "Minimale Anzahl der Bilder für ein Upload ist";

$language_MaximumAllowedResolutionForJPGsIs = "Die maximale Auflösung für JPGs ist";
$language_MaximumAllowedWidthForJPGsIs = "Die maximal erlaubte Breite für JPGs ist";
$language_MaximumAllowedHeightForJPGsIs = "Die maximal erlaubte Höhe für JPGs ist";

$language_MaximumAllowedResolutionForPNGsIs = "Die maximale Auflösung für PNGs ist";
$language_MaximumAllowedWidthForPNGsIs = "Die maximal erlaubte Breite für PNGs ist";
$language_MaximumAllowedHeightForPNGsIs = "Die maximal erlaubte Höhe für PNGs ist";

$language_MaximumAllowedResolutionForGIFsIs = "Die maximale Auflösung für GIFs ist";
$language_MaximumAllowedWidthForGIFsIs = "Die maximal erlaubte Breite für GIFs ist";
$language_MaximumAllowedHeightForGIFsIs = "Die maximal erlaubte Höhe für GIFs ist";

$language_YouHaveToCheckThisAgreement = "Du musst mit den Bedingungen einverstanden sein";
$language_EmailAdressHasToBeValid = "Diese E-Mail Adresse ist ungültig";
$language_MinAmountOfCharacters = "Mindestanzahl an Buchstaben";
$language_MaxAmountOfCharacters = "Höchstanzahl an Buchstaben";
$language_ChooseYourImage = "Kein Bild gewählt";
$language_ThePhotoContestIsOver = "Der Fotowettbewerb ist beendet";

$language_ShowMeUserInfoOnLeftMouseHold = "Linke Maustaste halten um User-Info zu sehen";

$language_ThisMailAlreadyExists = "Diese E-Mail Adresse ist bereits registriert";
$language_ThisUsernameAlreadyExists = "Dieser Benutzername ist bereits vergeben";

$language_UsernameOrEmail = "Benutzername oder E-Mail";
$language_UsernameOrEmailRequired = "Bitte Benutzernamen oder E-Mail eingeben";

$language_UsernameOrEmailDoesNotExist = "Benutzername oder E-Mail ist nicht vorhanden";

$language_Password = "Passwort";
$language_PasswordRequired = "Bitte Passwort eingeben";

$language_PasswordIsWrong = "Passwort ist falsch";

$language_YouAreAlreadyLoggedIn = "Sie sind bereits eingeloggt";

$language_PleaseFillOut = "Bitte ausfüllen";

$language_PasswordsDoNotMatch = "Passwörter stimmen nicht überein";


}

else if($checkLanguage=='ru'){
	
	
$language_SortBy = "Сортировать";
$language_Comments = "Комментарии";
$language_VoteFirst = "Твой голос";
$language_ThumbView = "Вертикальный вид";
$language_HeightView = "Мозаика";
$language_RowView = "Горизонтальный вид";
$language_RandomSortSorting = "Случайный";
$language_DateDescend = "По дате, сначала последние";
$language_DateAscend = "По дате, сначала первые";
$language_CommentsDescend = "По комментариям, сначала последние";
$language_CommentsAscend = "По комментариям, сначала первые";
$language_RatingDescend = "По рейтингу, сначала больший";
$language_RatingAscend = "По рейтингу, сначала меньший";
$language_FullSize = "Оригинальный размер";
$language_PictureComments = "Комментарии к фотографии";
$language_YourComment = "Твой комментарий";
$language_Name = "Имя";
$language_Comment = "Комментарий";
$language_IamNotArobot = "Я не бот";
$language_Send = "Отправить";
$language_TheNameFieldMustContainTwoCharactersOrMore = "Имя должно быть больше, чем две буквы";
$language_TheCommentFieldMustContainThreeCharactersOrMore = "Комментарий должен быть больше, чем три буквы";
$language_PlzCheckTheCheckboxToProveThatYouAreNotArobot = "Пожалуйста, проверьте отметку - чтобы показать, что Вы не робот";
$language_ThankYouForYourComment = "Спасибо за ваш комментарий";
$language_YouHaveAlreadyVotedThisPicture = "Вы уже оценили этo фото";
$language_AllVotesUsed = "Вы уже использовали все свои голоса";
$language_OnlyRegisteredUsersCanVote = "Только зарегистрированные пользователи могут голосовать";
$language_BackToGallery = "Вернуться к галерее";
$language_ThisFileTypeIsNotAllowed = "Этот тип файла не допускается";
$language_TheFileYouChoosedIsToBigMaxAllowedSize = "Файл, который вы выбрали слишком большой. Макс допустимый размер";
$language_TheResolutionOfThisPicIs = "Разрешение этого фото";

$language_BulkUploadQuantityIs = "Максимальное количество фотографий для загрузки является";
$language_BulkUploadLowQuantityIs = "Минимальное количество фотографий для загрузки является";

$language_MaximumAllowedResolutionForJPGsIs = "Максимально допустимое разрешение для формата JPEG является";
$language_MaximumAllowedWidthForJPGsIs = "Максимально допустимое разрешение для ширини JPEG является";
$language_MaximumAllowedHeightForJPGsIs = "Максимально допустимое разрешение для высоти JPEG является";

$language_MaximumAllowedResolutionForPNGsIs = "Максимально допустимое разрешение для PNG является";
$language_MaximumAllowedWidthForPNGsIs = "Максимально допустимое разрешение для ширини PNG является";
$language_MaximumAllowedHeightForPNGsIs = "Максимально допустимое разрешение для высоти PNG является";


$language_MaximumAllowedResolutionForGIFsIs = "Максимально допустимое разрешение для GIF является";
$language_MaximumAllowedWidthForGIFsIs = "Максимально допустимое разрешение для ширини GIF является";
$language_MaximumAllowedHeightForGIFsIs = "Максимально допустимое разрешение для высоти GIF является";

$language_YouHaveToCheckThisAgreement = "Вы должны принять это соглашение";
$language_EmailAdressHasToBeValid = "Адрес электронной почты должен быть действительным";
$language_MinAmountOfCharacters = "Минимальное количество символов";
$language_MaxAmountOfCharacters = "Максимально количество символов";
$language_ChooseYourImage = "Не выбраны изображения";
$language_ThePhotoContestIsOver = "Фотоконкурс закончился";	

$language_ShowMeUserInfoOnLeftMouseHold = "Держать левую кнопку мыши чтобы увидеть информации от пользователя";

$language_ThisMailAlreadyExists = "Этот адрес электронной почты уже зарегистрированn";
$language_ThisUsernameAlreadyExists = "Это имя пользователя уже занято";

$language_UsernameOrEmail = "Имя пользователя или эл. адрес";
$language_UsernameOrEmailRequired = "Имя пользователя или эл. адрес необходимо";

$language_UsernameOrEmailDoesNotExist = "Имя пользователя или эл. адрес не существует";

$language_Password = "Пароль";
$language_PasswordRequired = "Пароль необходим";

$language_PasswordIsWrong = "Пароль неправильн";

$language_YouAreAlreadyLoggedIn = "Вы уже зарегистрированы";

$language_PleaseFillOut = "Пожалуйста заполните";

$language_PasswordsDoNotMatch = "Пароли не совпадают";

}



else if($checkLanguage=='nl'){
	
	
$language_SortBy = "Sortieren";
$language_Comments = "Commentaar";
$language_VoteFirst = "Stemmen";
$language_ThumbView = "Miniaturen";
$language_HeightView = "Alle foto's op dezelfde hoogte";
$language_RowView = "Gelijk aantal beelden in een rij";
$language_RandomSortSorting = "Zoevallig";
$language_DateDescend = "Datum aflopend";
$language_DateAscend = "Datum oplopend";
$language_CommentsDescend = "Reacties aflopend";
$language_CommentsAscend = "Reacties oplopend";
$language_RatingDescend = "Recensies aflopend";
$language_RatingAscend = "Recensies oplopend";
$language_FullSize = "Ware Grootte";
$language_PictureComments = "Commentaar op de foto";
$language_YourComment = "Uw Commentaar";
$language_Name = "Naam";
$language_Comment = "Commentaar";
$language_IamNotArobot = "Ik ben geen robot";
$language_Send = "Versturen";
$language_TheNameFieldMustContainTwoCharactersOrMore = "De naam moet langer zijn dan twee letters";
$language_TheCommentFieldMustContainThreeCharactersOrMore = "De reactie moet langer zijn dan drie letters";
$language_PlzCheckTheCheckboxToProveThatYouAreNotArobot = "Zet een vinkje om aan te geven dat je geen robot ben";
$language_ThankYouForYourComment = "Bedankt voor uw reactie";
$language_YouHaveAlreadyVotedThisPicture = "Deze foto heb je al beoordeeld";
$language_AllVotesUsed = "Je hebt al gebruikt al uw stemmen";
$language_OnlyRegisteredUsersCanVote = "Alleen geregistreerde gebruikers kunnen een cijfer";
$language_BackToGallery = "Terug naar Galerie";
$language_ThisFileTypeIsNotAllowed = "Dit bestandstype is niet toegestaan";
$language_TheFileYouChoosedIsToBigMaxAllowedSize = "Het bestand dat u hebt gekozen is te groot. Maximaal toegestane grootte";
$language_TheResolutionOfThisPicIs = "De resolutie van de foto is";

$language_BulkUploadQuantityIs = "Maximum aantal beelden voor een upload is";
$language_BulkUploadLowQuantityIs = "Minimum aantal beelden voor een upload is";

$language_MaximumAllowedResolutionForJPGsIs = "De maximale resolutie voor JPG is";
$language_MaximumAllowedWidthForJPGsIs = "De maximale resolutie de brede voor JPG is";
$language_MaximumAllowedHeightForJPGsIs = "De maximale resolutie de hoogte voor JPG is";

$language_MaximumAllowedResolutionForPNGsIs = "De maximale resolutie voor PNG is";
$language_MaximumAllowedWidthForPNGsIs = "De maximale resolutie de brede voor PNG is";
$language_MaximumAllowedHeightForPNGsIs = "De maximale resolutie de hoogte voor PNG is";

$language_MaximumAllowedResolutionForGIFsIs = "De maximale resolutie voor GIF is";
$language_MaximumAllowedWidthForGIFsIs = "De maximale resolutie de brede voor GIF is";
$language_MaximumAllowedHeightForGIFsIs = "e maximale resolutie de hoogte voor GIF is";

$language_YouHaveToCheckThisAgreement = "U moet akkoord gaan met de voorwaarden";
$language_EmailAdressHasToBeValid = "Het e-mailadres is ongeldig";
$language_MinAmountOfCharacters = "Minimum aantal letters";
$language_MaxAmountOfCharacters = "Maximum aantal letters";
$language_ChooseYourImage = "Geen foto geselecteerd";
$language_ThePhotoContestIsOver = "De fotowedstrijd is voltooid";

$language_ShowMeUserInfoOnLeftMouseHold = "Linker muisknop ingedrukt om informatie voor de gebruiker te zien";

$language_ThisMailAlreadyExists = "Dit e-mailadres is reeds geregistreerd";
$language_ThisUsernameAlreadyExists = "Deze gebruikersnaam is al in gebruik";

$language_UsernameOrEmail = "Gebruikersnaam of e-mail";
$language_UsernameOrEmailRequired = "Gebruikersnaam oder e-mail nodig";

$language_UsernameOrEmailDoesNotExist = "Gebruikersnaam oder e-Mail bestaat niet";

$language_Password = "Wachtwoord";
$language_PasswordRequired = "Wachtwoord nodig";

$language_YouAreAlreadyLoggedIn = "U bent al geregistreerd";

$language_PleaseFillOut = "Vul";

$language_PasswordsDoNotMatch = "Wachtwoorden komen niet overeen";


}

else if($checkLanguage!='nl' or $checkLanguage!='ru' or $checkLanguage!='de'){
$language_SortBy = "Sort by";
$language_Comments = "Comments";
$language_VoteFirst = "Vote first";
$language_ThumbView = "Thumb view";
$language_HeightView = "Height view";
$language_RowView = "Row view";
$language_RandomSortSorting = "Random";
$language_DateDescend = "Date descend";
$language_DateAscend = "Date ascend";
$language_CommentsDescend = "Comments descend";
$language_CommentsAscend = "Comments ascend";
$language_RatingDescend = "Rating descend";
$language_RatingAscend = "Rating ascend";
$language_FullSize = "Full size";
$language_PictureComments = "Picture comments";
$language_YourComment = "Your comment";
$language_Name = "Name";
$language_Comment = "Comment";
$language_IamNotArobot = "I am not a robot";
$language_Send = "Send";
$language_TheNameFieldMustContainTwoCharactersOrMore = "The name field must contain two characters or more";
$language_TheCommentFieldMustContainThreeCharactersOrMore = "The comment field must contain three characters or more";
$language_PlzCheckTheCheckboxToProveThatYouAreNotArobot = "Plz check the checkbox to prove that you are not a robot";
$language_ThankYouForYourComment = "Thank you for your comment";
$language_YouHaveAlreadyVotedThisPicture = "You have already rated this picture";
$language_AllVotesUsed = "You have already used all your votes";
$language_OnlyRegisteredUsersCanVote = "Only registered users are able to vote";
$language_BackToGallery = "Back to gallery";
$language_ThisFileTypeIsNotAllowed = "This file type is not allowed";
$language_TheFileYouChoosedIsToBigMaxAllowedSize = "The file you choosed is to big, max allowed size";
$language_TheResolutionOfThisPicIs = "The resolution of this image is";

$language_BulkUploadQuantityIs = "Maximum number of images for one upload is";
$language_BulkUploadLowQuantityIs = "Minimum number of images for one upload is";

$language_MaximumAllowedResolutionForJPGsIs = "Maximum allowed resolution for JPGs is";
$language_MaximumAllowedWidthForJPGsIs = "Maximum allowed width for JPGs ist";
$language_MaximumAllowedHeightForJPGsIs = "Maximum allowed height for JPGs ist";

$language_MaximumAllowedResolutionForPNGsIs = "Maximum allowed resolution for PNGs is ";
$language_MaximumAllowedWidthForPNGsIs = "Maximum allowed width for PNGs ist";
$language_MaximumAllowedHeightForPNGsIs = "Maximum allowed height for PNGs ist";

$language_MaximumAllowedResolutionForGIFsIs = "Maximum allowed resolution for GIFs is";
$language_MaximumAllowedWidthForGIFsIs = "Maximum allowed width for GIFs ist";
$language_MaximumAllowedHeightForGIFsIs = "Maximum allowed height for GIFs ist";

$language_YouHaveToCheckThisAgreement = "You have to check this agreement";
$language_EmailAdressHasToBeValid = "This email is not valid";
$language_MinAmountOfCharacters = "Min amount of characters";
$language_MaxAmountOfCharacters = "Max amount of characters";
$language_ChooseYourImage = "Choose your image";
$language_ThePhotoContestIsOver = "The photo contest is over.";
$language_ShowMeUserInfoOnLeftMouseHold = "Hold left mouse to see user info";

$language_ThisMailAlreadyExists = "This email address is already registered";
$language_ThisUsernameAlreadyExists = "This username is already taken";

$language_UsernameOrEmail = "Username or e-mail";
$language_UsernameOrEmailRequired = "Username or e-mail required";

$language_UsernameOrEmailDoesNotExist = "Username or e-mail does not exist";

$language_Password = "Password";
$language_PasswordRequired = "Password required";

$language_PasswordIsWrong = "Password is wrong";

$language_YouAreAlreadyLoggedIn = "You are already logged in";

$language_PleaseFillOut = "Please fill out";

$language_PasswordsDoNotMatch = "Passwords do not match";

}

//echo "$language_MaximumAllowedWidthForJPGsIs";

?>