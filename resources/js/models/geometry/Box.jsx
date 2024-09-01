import React, { useRef } from "react";
import { useFrame } from "@react-three/fiber";

export default function Box(props) {
    const mesh = useRef();

    // Mengatur rotasi kotak setiap frame
    useFrame(() => {
        if (mesh.current) {
            mesh.current.rotation.x += 0.01;
            mesh.current.rotation.y += 0.01;
        }
    });

    return (
        <mesh {...props} ref={mesh}>
            <boxGeometry args={[1, 1, 1]} />

            <meshStandardMaterial color="orange" />
        </mesh>
    );
}
