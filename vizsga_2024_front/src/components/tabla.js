import Table from 'react-bootstrap/Table';

export default function Tabla() {
    return (
        <Table striped bordered hover>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Osztaly</th>
                    <th>Tevekenyseg</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Bicikli</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>3</td>
                    <td>ültetés</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2</td>
                    <td>roller</td>
                </tr>
            </tbody>
        </Table>
    )
}