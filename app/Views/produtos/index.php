<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        thead {
            background-color: #007BFF;
            color: white;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        th {
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        td {
            color: #333;
        }
    </style>
</head>
<body>
    <h1><?php echo $titulo ?></h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor de Compra</th>
                <th>Valor de Venda</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?php echo $produto['nome'] ?></td>
                <td><?php echo $produto['descricao'] ?></td>
                <td><?php echo $produto['valor_de_compra'] ?></td>
                <td><?php echo $produto['valor_de_venda'] ?></td>
                <td><?php echo $produto['quantidade'] ?></td>
                
                <?php if($produto['validade'] == ""):?>// vou parar por aqui!
                    <td>Produto sem validade!</td>
                    <?php else: ?>
                        <td><?php echo $produto['validade'] ?></td>
                    <?php endif; ?>


            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
