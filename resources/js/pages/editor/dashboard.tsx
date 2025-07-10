import { Head } from '@inertiajs/react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Button } from '@/components/ui/button';

export default function EditorDashboard() {
    return (
        <>
            <Head title="Editor Dashboard" />
            <div className="space-y-6">
                <div>
                    <h1 className="text-3xl font-bold">Editor Dashboard</h1>
                    <p className="text-muted-foreground">
                        Content management panel for EDB
                    </p>
                </div>

                <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <Card>
                        <CardHeader>
                            <CardTitle>Content Management</CardTitle>
                            <CardDescription>Create and edit content</CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button>Create Content</Button>
                        </CardContent>
                    </Card>

                    <Card>
                        <CardHeader>
                            <CardTitle>Drafts</CardTitle>
                            <CardDescription>Manage your draft content</CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button variant="outline">View Drafts</Button>
                        </CardContent>
                    </Card>

                    <Card>
                        <CardHeader>
                            <CardTitle>Published</CardTitle>
                            <CardDescription>View published content</CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button variant="outline">View Published</Button>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </>
    );
}
