 <?php

// $user = 'user';
// // Developed by Frederick Ennin (Dollarstir)

// if (isset($_COOKIE['user'])) {
//     $repo = el::h3('class="text-center"', 'Yolk framework is successfully installed. kindly visit '.el::a('https://phpyolk.com/', 'target="blank"', 'phpyolk.com').' to continue. ');
// } else {
//     $repo = el::form('', '', 'class="welcome"', [
//         Inputs::input('email', 'usermail', 'mail', '', '', '', 'placeholder="Enter your email address"'),
//         el::div('id="btn"', [
//             inputs::input('submit', '', 'primary', '', 'Continue'),
//         ]),
//     ]);
// }
// require 'components/codes.php';

// YolkUI::run(new Wrapper(
//     el::html(
//         'lang="en"',
//         [
//             el::head(
//                 [
//                     meta::charset(),
//                     meta::browser(),
//                     meta::viewport(),
//                     el::title('Yolk Framework'),
//                     Yolk::uicore('corecss'),
//                     el::linkcss('yolkassets/style.css'),

//                     import('favicon'),
//                     Yolk::uicore('corecss'),
//                     import('css'),
//                     import('yolkcss'),
//                 ]
//             ),

//             el::body(
//                 [
//                     el::div('class="container"', [
//                         el::h2('class="text-center success"', 'Thank you for using the Yolk framework'),
//                         $repo,
//                     ]),
//                     Yolk::uicore('corejs'),
//                     import('js'),
//                 ]
//             ),
//         ]
//     )
// )); -->

$address = 'http://localhost/';
$port = 80;

// Create WebSocket.
$server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($server, SOL_SOCKET, SO_REUSEADDR, 1);
socket_bind($server, $address, $port);
socket_listen($server);
$client = socket_accept($server);

// Send WebSocket handshake headers.
$request = socket_read($client, 5000);
preg_match('#Sec-WebSocket-Key: (.*)\r\n#', $request, $matches);
$key = base64_encode(pack(
    'H*',
    sha1($matches[1].'258EAFA5-E914-47DA-95CA-C5AB0DC85B11')
));
$headers = "HTTP/1.1 101 Switching Protocols\r\n";
$headers .= "Upgrade: websocket\r\n";
$headers .= "Connection: Upgrade\r\n";
$headers .= "Sec-WebSocket-Version: 13\r\n";
$headers .= "Sec-WebSocket-Accept: $key\r\n\r\n";
socket_write($client, $headers, strlen($headers));

// Send messages into WebSocket in a loop.
while (true) {
    sleep(1);
    $content = 'Now: '.time();
    $response = chr(129).chr(strlen($content)).$content;
    socket_write($client, $response);
}
