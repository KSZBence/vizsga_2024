import Table from 'react-bootstrap/Table';

export default function Tabla(props) {
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
                    <td></td>
                    <td>1</td>
                    <td>Bicikli</td>

                </tr>        
            </tbody>
        </Table>
    )
}