import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';

export default function InputForm() {
    return (
        <div>Mit tettél ma a földért?
            <Form>
                <fieldset>
                <Form.Group className="mb-3">
                        <Form.Label htmlFor="Select">osztály</Form.Label>
                        <Form.Select id="Select">
                            <option>válassz</option>                            
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </Form.Select>
                    </Form.Group>
                    <Form.Group className="mb-3">
                        <Form.Label htmlFor="disabledSelect">tevékenység</Form.Label>
                        <Form.Select id="disabledSelect">
                            <option>válassz</option>
                            <option>tevekenyseg</option>
                            <option>tevekenytelenseg</option>
                            <option>teve</option>
                        </Form.Select>
                    </Form.Group>
                    <Button type="submit">Küldés</Button>
                </fieldset>
            </Form>
        </div>
    )
}