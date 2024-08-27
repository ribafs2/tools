# Introdução às expressões regulares - regex

As expressões regulares são um verdadeiro canivete suiço para o programador, pois podem resolver alguns problemas com grande facilidade caso saibamos como usar.

Seu uso não é intuitivo. Por conta disso resolvi fazer uma boa pesquisa e reunir neste repositórios vários bons tutoriais, exemplos de uso com PHP, com o VSCode e linkar um ótimo testador online, do qual fiz um fork, traduzi e criei um arquivo com diversos exemplos de uso:

https://github.com/ribafs/regex-tester 

Expressões Regulares é uma forma avançada de mexer com strings. Elas permitem que você crie condições para que um trecho seja encontrado, substituído ou uma string separada em uma array.

Uma expressão regular, na Informática, define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras. É um meio preciso de se fazer buscas de determinadas porções de texto.

Por exemplo, se o conjunto de palavras for {asa, carro, jardim, ovos, terra} e a expressão regular buscar por um padrão rr, obterá as palavras carro e terra.

A utilidade do RegExp é apenas limitada pela sua imaginação.

As ERs são úteis para buscar ou validar textos variáveis como:
```
    data
    horário
    número IP
    endereço de e-mail
    endereço de Internet (url)
    declaração de uma função()
    dados na coluna N de um texto
    dados que estão entre tags /tags
    número de telefone, RG, CPF, cartão de crédito

[a-z] - qualquer letra minúslula atende
[A-Z] - qualquer letra maiúscula atende
[0-9] - qualquer algarismo, de 0 a 9 atende
[a-zA-Z] - minúsculas e maiúsculas
[a-zA-Z0-9] - qualquer letra ou algarismo
[.,!?:…] 	Sinais de pontuação.
Semelhantes
[A-Za-z0-9] ~ [[:upper:][:lower:][:digit:]] ~ [[:alpha:][:digit:]] ~ [[:alnum:]]

Começar com - ^
Terminar com - $
Ou - |
Grupos de caracteres - [at]
```


