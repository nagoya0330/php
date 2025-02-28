<?php
$people = [
  [
    "first_name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "first_name" => "Jiro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "first_name" => "hanako",
    "age" => 16,
    "gender" => "women"
  ]
  ];
foreach ($people as $first_name => $age ) {
    print $first_name . "(" . $age . $gender . ")" . '<br />';
    echo $people[0]["first_name"] . ["age"] . ["gender"] ;
    echo $people[1]["first_name"] . ["age"] . ["gender"];
    echo $people[2]["first_name"] . ["age"] . ["gender"];
}    

<?php

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
